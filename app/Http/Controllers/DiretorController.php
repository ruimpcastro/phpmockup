<?php

namespace App\Http\Controllers;

use App\Diretor;
use App\Entidade;
use App\Estagiario;
use App\Orientador;
use App\Projeto;
use App\Utilizador;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DiretorController extends Controller
{

    /**
     * Home page
     *
     */
    public function home(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.home', ['diretor'=>$d]);
    }

    public function listarEntidades(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        $e = $d->entidades;
        return view('diretor.entidades', ['diretor'=>$d, 'entidades'=>$e]);
    }

    public function listarEstagiarios(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        $e = $d->estagiarios;
        return view('diretor.estagiarios', ['diretor'=>$d, 'estagiarios'=>$e]);
    }

    public function listarSupervisores(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        $s = $d->supervisores;
        return view('diretor.supervisores', ['diretor'=>$d, 'supervisores'=>$s]);
    }

    public function detalhesEstagiario(int $id_diretor, int $id_estagiario)
    {
        $d = Diretor::find($id_diretor);
        $est = Estagiario::find($id_estagiario);
        return view('diretor.estagiario', ['diretor'=>$d, 'estagiario'=>$est]);
    }

    public function createEntidade(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.entidade_criar', ['diretor'=>$d]);
    }

    public function createSupervisor(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.supervisor_criar', ['diretor'=>$d]);
    }

    public function guardarEntidade(Request $request)
    {
        $e = new Entidade();
        $e->nome=$request->get('nome');
        $e->abreviatura=$request->get('abreviatura');
        $e->descricao=$request->get('descricao');
        $e->username=$request->get('username');
        $e->password=$request->get('password');
        $d = Diretor::find($request->get('diretorId'));
        $d->entidades()->save($e);

        $o = new Orientador();
        $o->nome=$request->get('o_nome');
        $o->email=$request->get('o_email');
        $o->telemovel=$request->get('o_telemovel');
        $e->orientador()->save($o);

        return redirect($request->get('redirect'));
    }

    /**
     * Análise e marcação da proposta como aprovada ou rejeitada
     *
     */

    public function confs(int $id_diretor){
        $d = Diretor::find($id_diretor);
        return view('diretor.confs', ['diretor'=>$d]);
    }

    public function listarProjetos(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        $e = $d->entidades;
        return view('diretor.projetos', ['diretor'=>$d, 'entidades'=>$e]);
    }

    public function detalhesProjeto(int $id_diretor, int $id_projeto)
    {
        $d = Diretor::find($id_diretor);
        $p = Projeto::find($id_projeto);
        $e = $p->entidade;
        $o = $p->entidade->orientador;
        return view('diretor.projeto', ['diretor'=>$d, 'projeto'=>$p, 'entidade'=>$e, 'orientador'=>$o]);
    }

    /**
     * If proposta rejeitada:
     * Campo de texto para justificar a decisao do Diretor
     * Enviar aviso para empresa editar e voltar a submeter uma nova proposta
     *
     */
    public function justificarReprovacao(int $id_diretor, int $id_projeto)
    {
        $d = Diretor::find($id_diretor);
        $p = Projeto::find($id_projeto);
        $e = $p->entidade;
        return view('diretor.justificar', ['diretor'=>$d, 'projeto'=>$p, 'entidade'=>$e]);
    }

    /**
     * Atribuir Projeto a estagiário e ao supervisor
     */
    public function atribuirProjeto(): void
    {

    }

    /**
     * Atribuir estagiário
     * Factor de seleção: média do estudante
     *
     */
    public function atribuirProjetoAluno(): void
    {
        //
    }

    /**
     * Atribuir supervisor
     * Atribuir data de inicio e data da primeira reunião com a entidade
     *
     */
    public function atribuirProjetoSupervisor(): void
    {
        //
    }

    /**
     * Numero de propostas de projeto por aluno (p. ex. 5 propostas)
     */
    public function numeroPropostasPorAluno(): void
    {
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new Diretor();
        $d->nome=$request->get('nome');
        $d->email=$request->get('email');
        $d->telemovel=$request->get('telemovel');
        $d->username=$request->get('username');
        $d->password=$request->get('password');
        $d->dataPubliPropostas=$request->get('dataPubliPropostas');
        $d->save();
        return redirect("/login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function show(Diretor $diretor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function edit(Diretor $diretor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $d = Diretor::find($request->get('diretorId'));
        $d->nome=$request->get('nome');
        $d->email=$request->get('email');
        $d->telemovel=$request->get('telemovel');
        $d->username=$request->get('username');
        $d->password=$request->get('password');
        $d->dataPubliPropostas=$request->get('dataPubliPropostas');
        $d->save();
        return redirect($request->get('redirect'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diretor  $diretor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diretor $diretor)
    {
        //
    }
}
