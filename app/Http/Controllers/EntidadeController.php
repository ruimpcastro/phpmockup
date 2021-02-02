<?php

namespace App\Http\Controllers;

use App\Diretor;
use App\Entidade;
use App\Projeto;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    /**
     * Entidade home page
     *
     * @param int $id_entidade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function home(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.home', ['entidade'=>$e]);
    }

    /**
     * Lista de projetos criado por várias entidades
     *
     */
    public function listarProjetos(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        $p = $e->projetos;
        return view('entidade.projetos', ['entidade'=>$e, 'projetos'=>$p]);
    }

    public function editarProjeto(int $id_entidade, int $id_projeto)
    {
        $e = Entidade::find($id_entidade);
        $p = Projeto::find($id_projeto);
        return view('entidade.projeto_editar', ['entidade'=>$e, 'projeto'=>$p]);
    }

    public function detalhesProjeto(int $id_entidade, int $id_projeto)
    {
        $e = Entidade::find($id_entidade);
        $p = Projeto::find($id_projeto);
        $o = $e->orientador;
        return view('entidade.projeto', ['entidade'=>$e, 'projeto'=>$p, 'orientador'=>$o]);
    }

    public function notificacoes(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        $n = $e->notificacoes;
        return view('entidade.notificacoes', ['entidade'=>$e, 'notificacoes'=>$n]);
    }

    public function listarOrientadores(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        $o = $e->orientador;
        return view('entidade.orientador', ['entidade'=>$e, 'orientador'=>$o]);
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
        return view('entidade.proposta_criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new Entidade();
        $e->nome=$request->get('nome');
        $e->abreviatura=$request->get('abreviatura');
        $e->descricao=$request->get('descricao');
        $d = Diretor::find($request->get('diretorId'));
        $d->entidades()->save($e);
        return redirect("/login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidade $entidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        //
    }
}
