<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
	use SoftDeletes;

	protected $table = 'class';
    protected $fillable=[
	'class_name', 'major'
    ];
    protected $primaryKey = 'id_class';
    protected $dates = ['deleted_at'];
}
