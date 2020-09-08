<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use \App\Kelas;
use \App\Teacher;
use \App\Schedule;

class GuruController extends Controller
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
        return view('guru.dashboard', compact('schedule'));
    }
    
    public function DaftarUpacara()
    {
     return view ('guru.daftar-upacara');
}

}
