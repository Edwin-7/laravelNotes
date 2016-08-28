<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['title', 'note'];

    public function relationCategorias(){
    	return $this->belongsTo(Categorias::class);
    }
}
