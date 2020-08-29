<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('schedules')->insert([
        	'id'         =>'1',
        	'id_teacher' =>'2',
        	'id_class'   =>'1',

        ]);
    }
}

