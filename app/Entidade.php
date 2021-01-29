<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Utilizador
{
    public function projetos(){
        return $this->hasMany(Projeto::class);
    }

    public function orientador(){
        return $this->hasOne(Orientador::class);
    }

    protected static $singleTableType = Entidade::class;
}
