<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Teacher extends Model
{
	use SoftDeletes;
	 
	protected $table = 'teachers';
	
    protected $guarded = [];
    protected $primaryKey = 'id_teacher';
    protected $dates = ['deleted_at'];
}
