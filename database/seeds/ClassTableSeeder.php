<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('class')->insert([
        	'id_class'     =>1,
        	'class_name' =>'X RPL 1',
        	'major' =>'REKAYASA PERANGAT LUNAK'
        ]);

         DB::table('class')->insert([
        	'id_class'     =>2,
        	'class_name' =>'X RPL 2',
        	'major' =>'REKAYASA PERANGAT LUNAK'
        ]);
         
    }
}


