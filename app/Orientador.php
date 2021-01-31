<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    protected $table = 'orientadores';

    public function entidade(){
        return $this->belongsTo(Entidade::class);
    }
}
