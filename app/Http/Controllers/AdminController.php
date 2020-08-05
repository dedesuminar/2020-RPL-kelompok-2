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
                                ->join('classes' , 'classes.id' , '=' , 'schedules.id_class')
                                ->select(
                                    'schedules.*', 'schedules.created_at as created_schedule',
                                    'classes.class_name',
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
}
