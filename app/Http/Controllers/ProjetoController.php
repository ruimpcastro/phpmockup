<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Entidade;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
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
    public function create(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.projeto_criar', ['entidade'=>$e]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Projeto();
        $p->titulo=$request->get('titulo');
        $p->descricao=$request->get('descricao');
        $p->perfilProfissional=$request->get('perfilProfissional');
        $p->aprovado=$request->get('aprovado');
        $e = Entidade::find($request->get('entidadeId'));
        $e->projetos()->save($p);
        return redirect($request->get('redirect'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        $p = Projeto::find($request->projetoId);
        $p->titulo=$request->get('titulo');
        $p->descricao=$request->get('descricao');
        $p->perfilProfissional=$request->get('perfilProfissional');
        $p->aprovado=$request->get('aprovado');
        $p->save();
        return redirect($request->get('redirect'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }
}
