<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model{
   	//use SoftDeletes;
	protected $table = 'property_types';
	protected $primaryKey = 'id';
	
    protected $fillable = [
        'name','name_ar',
    ];
}