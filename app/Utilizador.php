<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Utilizador extends Model
{
    use SingleTableInheritanceTrait;

    protected $table = "utilizadores";
    protected static $singleTableTypeField = 'tipo';
    protected static $persisted = ['nome','email','telemovel','abreviatura','descricao','username','password','diretor_id','projeto_id','dataPubliPropostas', 'maxPrefs'];
    protected static $singleTableSubclasses = [
        Entidade::class,
        Supervisor::class,
        Diretor::class,
        Estagiario::class
    ];

    public function notificacoes(){
        return $this->hasMany(Notificacao::class);
    }
}
