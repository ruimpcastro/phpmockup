<?php

namespace App\Http\Controllers;

use App\Entidade;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    public function home(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.home', ['entidade'=>$e]);
    }

    public function notificacoes(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.notificacoes', ['entidade'=>$e]);
    }

    public function listar_propostas(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.propostas', ['entidade'=>$e]);
    }

    public function detalhes_propostas(int $id_entidade, int $id_proposta)
    {
        $e = Entidade::find($id_entidade);
        $p = Proposta::find($id_proposta);
        return view('entidade.proposta', ['entidade'=>$e, 'proposta'=>$p]);
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
