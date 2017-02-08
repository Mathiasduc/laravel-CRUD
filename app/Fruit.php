<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
	public $timestamps = false;
	
	/**
	 * Mass assignable attributes
	 *
	 * @var array
	 **/
	protected $fillable = ['name','price','description','stock'];
}