<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Utilizador
{
    protected static $singleTableType = Supervisor::class;

    public function diretor(){
        return $this->belongsTo(Diretor::class);
    }
}
