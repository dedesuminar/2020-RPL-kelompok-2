<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use \App\Kelas;
use \App\Teacher;
use \App\Schedule;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         $this->middleware('DisablePreverentBack');

    }

    public function index()
    {
        $schedule = Schedule::join('teachers' , 'teachers.id_teacher' , '=' , 'schedules.id_teacher')
        ->join('class' , 'class.id_class' , '=' , 'schedules.id_class')
        ->select(
            'schedules.*', 'schedules.created_at as created_schedule',
            'class.class_name',
            'teachers.teacher_name'
        )
        ->orderBy('created_schedule', 'DESC')
        ->get();
        return view('admin.dashboard', compact('schedule'));
    }
    
    public function DaftarUpacara()
    {
     return view ('admin.daftar-upacara');
 }

 public function TambahPetugasUpacara(){
    $data ['kelas'] = kelas::all();
    $data ['guru'] = Teacher::all();
    $data ['no'] = 1;
    $data ['schedule'] = Schedule::join('teachers' , 'teachers.id_teacher' , '=' , 'schedules.id_teacher')
    ->join('class' , 'class.id_class' , '=' , 'schedules.id_class')
    ->select(
        'schedules.*', 'schedules.created_at as created_schedule',
        'class.class_name',
        'teachers.teacher_name'
    )
    ->orderBy('created_schedule', 'DESC')
    ->get();

    return view ('admin.tambah-petugas-upacara', $data);
}

public function SaveSchedule(Request $request){
    $create = new Schedule;
    $create->id_teacher = $request->input('pembina'); 
    $create->id_class =  $request->input('petugas');
    $create->created_at = $request->input('date');
    $create->save();
    return back()->withSuccess('Berhasil');
}

public function UpdateSchedule($id, Request $request)
{
    $update = Schedule::whereId($id)->first();
    $update->id_teacher = $request->input('id_teacher');
    $update->id_class = $request->input('id_class');
    $update->save();
    return back()->withSuccess('Edit Data Berhasil');

}


public function TambahPembina(){
  $data ['teacher'] = Teacher::all();
  $data ['kelas'] = kelas::all();
  $data ['no'] = 1;


  return view ('admin.tambah-pembina', $data);
}

public function SaveTeacher(Request $request){
    $create = new Teacher;
    $create->teacher_name = $request->input('teacher_name');
    $create->save();

    return back()->withSuccess('Berhasil');
}

public function UpdateTeacher($id, Request $request)
{
    $update = Teacher::whereIdTeacher($id)->first();
    $update->teacher_name = $request->input('teacher_name');
    $update->save();
    return back()->withSuccess('Edit Data Berhasil');

}

public function TambahKelas()
{
    $data ['kelas'] = Kelas::all();
    $data ['no'] = 1;

    return view ('admin.tambah-kelas',$data);
}

public function SaveClass(Request $request){
    $create = new Kelas;
    $create->class_name = $request->input('class_name');
    $create->major = $request->input('major');
    $create->save();

    return back()->withSuccess('Berhasil');
}

public function UpdateClass($id, Request $request)
{
    $update = Kelas::whereIdClass($id)->first();
    $update->class_name = $request->input('class_name');
    $update->major = $request->input('major');
    $update->save();
    return back()->withSuccess('Edit Data Berhasil');

}

public function deleteSchedule(Request $request)
{
    $delete = Schedule::whereId($request->input('id'));
    $delete->delete();
    if($delete){
        return back()->withSuccess('Data Berhasil dihapus');
    } else {
        return back()->withErrors('Data Gagal Dihapus');
    } 
    

}
public function deleteTeacher(Request $request)
{
    $delete = Teacher::whereIdTeacher($request->input('id_teacher'));
    $delete->delete();
    if($delete){
        return back()->withSuccess('Data Berhasil dihapus');
    } else {
        return back()->withErrors('Data Gagal Dihapus');
    } 
    

}

public function deleteClass(Request $request)
{
    $delete = Kelas::whereIdClass($request->input('id_class'));
    $delete->delete();
    if($delete){
        return back()->withSuccess('Data Berhasil dihapus');
    } else {
        return back()->withErrors('Data Gagal Dihapus');
    } 
    

}


}




 //        $id = $request->input('id_class');
 //        $delete = Kelas::whereIdClass($id)->delete();
 //        if($delete){
 //            return back()->withSuccess('Data Berhasil dihapus');
 //        } else {
 //        return back()->withErrors('Data Gagal Dihapus');
 //    } 

 // }


