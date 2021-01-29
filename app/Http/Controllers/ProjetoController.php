<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Entidade;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function listar_propostas_entidades(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        $p = Projeto::where('id_entidade', $id_entidade)->get();
        return view('entidade.projetos', ['entidade'=>$e, 'projetos'=>$p]);
    }

    public function detalhes_propostas_entidades(int $id_entidade, int $id_projeto)
    {
        $e = Entidade::find($id_entidade);
        $p = Projeto::find($id_projeto);
        return view('entidade.projeto', ['entidade'=>$e, 'projeto'=>$p]);
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
        //
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
        //
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
