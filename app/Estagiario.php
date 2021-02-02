<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Utilizador
{
    protected static $singleTableType = Estagiario::class;

    public function projeto()
    {
        return $this->hasOne(Projeto::class);
    }

    public function orientador()
    {
        return $this->hasOne(Orientador::class);
    }

    public function diretor()
    {
        return $this->belongsTo(Diretor::class);
    }

    public function entidade()
    {
        return $this->hasOne(Entidade::class);
    }

    public function preferencias()
    {
        return $this->belongsToMany(Projeto::class, 'preferencias', 'estagiario_id', 'projeto_id')
            ->withPivot('prioridade','id');
    }
}
