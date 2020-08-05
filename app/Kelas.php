<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	protected $table = 'classes';
    protected $fillable=[
	'class_name', 'majors'
    ];
}
