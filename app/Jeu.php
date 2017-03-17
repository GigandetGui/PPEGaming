<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    
	protected $table = 'jeux';

        public function types()
     {
     	return $this->belongsToMany('App\Type');
     }
}
