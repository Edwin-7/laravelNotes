<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function ralationNotes(){

    	return $this->hasMany(Notes::class);

    }
}
