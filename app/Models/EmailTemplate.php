<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class EmailTemplate extends Model
{
   	//use SoftDeletes;
	protected $table = 'email_template';
	protected $primaryKey = 'id';
	
    protected $fillable = [
        'title','subject','content'
    ];
}