<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Utilizador
{
    protected static $singleTableType = Entidade::class;


}
