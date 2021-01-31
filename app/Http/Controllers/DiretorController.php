<?php

namespace App\Http\Controllers;

use App\Diretor;
use App\Entidade;
use App\Orientador;
use Illuminate\Http\Request;

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
        $e = $d->entidades();
        return view('diretor.entidades', ['diretor'=>$d, 'entidades'=>$e]);
    }

    public function createEntidade(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.entidade_criar', ['diretor'=>$d]);
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

    public function validarProjeto(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.validar_projeto', [
            'diretor'=>$d,
            'entidades'=>$e,
            'projetos'=>$p]);
    }

    /**
     * If proposta rejeitada:
     * Campo de texto para justificar a decisao do Diretor
     * Enviar aviso para empresa editar e voltar a submeter uma nova proposta
     *
     */
    public function justificarProjetoRejeitado(): void
    {
        //
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
        $e = new Diretor();
        $e->nome=$request->get('nome');
        $e->email=$request->get('email');
        $e->telemovel=$request->get('telemovel');
        $e->username=$request->get('username');
        $e->password=$request->get('password');
        $e->save();
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
    public function update(Request $request, Diretor $diretor)
    {
        //
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
