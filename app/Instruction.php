<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    
	protected $fillable = ['content', 'name', 'category'];
}
