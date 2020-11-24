<?php

namespace App\Http\Controllers;

use App\Entidade;
use App\Proposta;
use Illuminate\Http\Request;

class PropostaController extends Controller
{

    public function listar_propostas_entidades(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        $p = Proposta::where('id_entidade', $id_entidade)->get();
        return view('entidade.propostas', ['entidade'=>$e, 'propostas'=>$p]);
    }

    public function detalhes_propostas_entidades(int $id_entidade, int $id_proposta)
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
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function show(Proposta $proposta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposta $proposta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposta $proposta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposta $proposta)
    {
        //
    }
}
