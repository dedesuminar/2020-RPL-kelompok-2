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
        	'class_name' =>'X MM 1',
        	'major'  =>'MULTIMEDIA',

       ]);

         DB::table('class')->insert([
        	'id_class'     =>2,
        	'class_name' =>'X MM 2',
        	'major'  =>'MULTIMEDIA',

       ]);

         DB::table('class')->insert([
        	'id_class'     =>3,
        	'class_name' =>'X RPL',
        	'major'  =>'REKAYASA PERANGKAT LUNAK',

       ]);

         DB::table('class')->insert([
        	'id_class'     =>4,
        	'class_name' =>'XI MM 1',
        	'major'  =>'MULTIMEDIA'

       ]);

         DB::table('class')->insert([
        	'id_class'     =>5,
        	'class_name' =>'XI MM 2',
        	'major'  =>'MULTIMEDIA'

       ]);

         DB::table('class')->insert([
        	'id_class'     =>6,
        	'class_name' =>'XI RPL',
        	'major'  =>'REKAYASA PERANGKAT LUNAK',

       ]);

         DB::table('class')->insert([
        	'id_class'     =>7,
        	'class_name' =>'XII MM',
        	'major'  =>'MULTIMEDIA',

       ]);

         DB::table('class')->insert([
        	'id_class'     =>8,
        	'class_name' =>'XII RPL 1',
        	'major'  =>'REKAYASA PERANGKAT LUNAK',

       ]);


         DB::table('class')->insert([
        	'id_class'     =>9,
        	'class_name' =>'XII RPL 2',
        	'major'  =>'REKAYASA PERANGKAT LUNAK',

       ]);


    }
}
