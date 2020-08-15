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
    public function index()
    {
        return view('admin.dashboard');
    }
    
 public function DaftarUpacara()
 {
     return view ('admin.daftar-upacara');
 }

 public function TambahPetugasUpacara(){
    $data ['kelas'] = kelas::all();
    $data ['guru'] = Teacher::all();
    $data ['no'] = 1;
    $data ['schedule'] = Schedule::join('teachers' , 'teachers.id' , '=' , 'schedules.id_teacher')
                                ->join('class' , 'class.id' , '=' , 'schedules.id_class')
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
    $create->save();
 }

public function edit($id)
    {
        $data = Schedule::find($id);

        return view('admin.edit-petugas',compact('data'));
    }


 public function TambahPembina()
 {
      $data ['teacher'] = Teacher::all();
      $data ['kelas'] = kelas::all();
      $data ['no'] = 1;


 return view ('admin.tambah-pembina', $data);
 }

 public function SaveTeacher(Request $request){
    $create = new Teacher;
    $create->teacher_name = $request->input('teacher_name');
    $create->save();

}
public function editPembina($id)
    {
        $data = Teacher::find($id);
        
        return view('admin.edit-pembina',compact('data'));
    }

public function TambahKelas()
{
    $data ['kelas'] = Kelas::all();
    $data ['kelas'] = kelas::all();
    $data ['no'] = 1;

return view ('admin.tambah-kelas',$data);
}

public function SaveClass(Request $request){
    $create = new Kelas;
    $create->class_name = $request->input('class_name');
    $create->majors = $request->input('majors');
    $create->save();
}

}
