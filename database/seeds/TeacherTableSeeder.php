<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'id_teacher'     =>1,
        	'teacher_name' =>'Drs. Dedi Hidayat',
        ]);

         DB::table('teachers')->insert([
        	'id_teacher'     =>2,
        	'teacher_name' =>'Yuliawati Winar,S.Pd,M.M.Pd',
        ]);

          DB::table('teachers')->insert([
        	'id_teacher'     =>3,
        	'teacher_name' =>'Agus Sofyan,SE',
        ]);

           DB::table('teachers')->insert([
        	'id_teacher'     =>4,
        	'teacher_name' =>'Deni Setiawan.S.T',
        ]);

            DB::table('teachers')->insert([
        	'id_teacher'     =>5,
        	'teacher_name' =>'Hamdan Firmansyah.S.Pd',
        ]);

             DB::table('teachers')->insert([
        	'id_teacher'     =>6,
        	'teacher_name' =>'Dyah Wiwit,S.Pd',
        ]);

              DB::table('teachers')->insert([
        	'id_teacher'     =>7,
        	'teacher_name' =>'Dede Suryana,AM,d M.O.S',
        ]);

              DB::table('teachers')->insert([
        	'id_teacher'     =>8,
        	'teacher_name' =>'Yusuf Maulana Arifin',
        ]);

              DB::table('teachers')->insert([
        	'id_teacher'     =>9,
        	'teacher_name' =>'Raynaldi Syahputra N,S Pd',
        ]);

              DB::table('teachers')->insert([
        	'id_teacher'     =>10,
        	'teacher_name' =>'Mujahid Munir Muttaqin S.T',
        ]);
    }
}

   


