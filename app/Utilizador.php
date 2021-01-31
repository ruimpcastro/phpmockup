<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Utilizador extends Model
{
    use SingleTableInheritanceTrait;

    protected $table = "utilizadores";
    protected static $singleTableTypeField = 'tipo';
    protected static $persisted = ['nome','email','telemovel','abreviatura','descricao','username','password','diretor_id'];
    protected static $singleTableSubclasses = [
        Entidade::class,
        Diretor::class
    ];

    public function notificacoes(){
        return $this->hasMany(Notificacao::class);
    }
}
