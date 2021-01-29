<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public function cronograma(){
        return $this->hasMany(Cronograma::class);
    }

    public function objetivos(){
        return $this->hasMany(Objetivo::class);
    }
}
