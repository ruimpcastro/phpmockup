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

    public function orientador(){
        return $this->hasOne(Orientador::class);
    }

    public function entidade(){
        return $this->belongsTo(Entidade::class);
    }

    public function preferidoPor()
    {
        return $this->belongsToMany(Estagiario::class, 'preferencias', 'estagiario_id', 'projeto_id');
    }

}
