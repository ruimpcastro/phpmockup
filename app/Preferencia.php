<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Project;

class Preferencia extends Model
{
    public function estagiario()
    {
        return $this->belongsTo(Estagiario::class);
    }

    public function projeto()
    {
        return $this->hasOne(Projeto::class);
    }
}
