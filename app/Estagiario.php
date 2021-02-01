<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Utilizador
{

    public function projeto()
    {
        return $this->hasOne(Projeto::class);
    }

    public function orientador()
    {
        return $this->hasOne(Orientador::class);
    }

    public function entidade()
    {
        return $this->hasOne(Entidade::class);
    }


}
