<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model //hasMany i belongsTo su klase koje pripadaju modelu
{
    public function ingridients()
	{
		return $this->hasMany('App\Ingridient'); //Ovaj recept ima mnogo sastojaka
	}
	
	public function creator()
	{
		return $this->belongsTo('App\User'); //I pripada korisniku
	}
}
