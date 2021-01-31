<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    protected $table = 'notificacoes';

    public function utilizador(){
        return $this->belongsTo(Utilizador::class);
    }
}
