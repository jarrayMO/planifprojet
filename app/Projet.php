<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	protected $guarded = [];

	public function taches()
	{
		return $this->hasMany('App\Tache');
	}
}
