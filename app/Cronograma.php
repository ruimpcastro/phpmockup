<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    public function projeto(){
        return $this->belongsTo(Projeto::class);
    }
}
