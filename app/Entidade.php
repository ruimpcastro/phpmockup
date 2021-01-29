<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    public function projetos(){
        return $this->hasMany(Projeto::class);
    }
}
