<?php

namespace App;

use App\Http\Controllers\ProjetoController;
use Illuminate\Database\Eloquent\Model;

class Diretor extends Utilizador
{
    protected static $singleTableType = Diretor::class;

    public function entidades(){
        return $this->hasMany(Entidade::class);
    }

    public function estagiarios(){
        return $this->hasMany(Estagiario::class);
    }

    public function supervisores(){
        return $this->hasMany(Supervisor::class);
    }
}
