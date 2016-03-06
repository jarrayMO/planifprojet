<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
	protected $guarded = [];

	public function projet()
	{
		return $this->belongsTo('App\Projet');
	}
}
