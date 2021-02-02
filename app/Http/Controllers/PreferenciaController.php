<?php

namespace App\Http\Controllers;

use App\Estagiario;
use App\Preferencia;
use Illuminate\Http\Request;

class PreferenciaController extends Controller
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
        $pref = new Preferencia();
        $pref->projeto_id=$request->get('projetoId');
        $pref->estagiario_id=$request->get('estagiarioId');
        $pref->prioridade=1;
        $pref->save();
        return redirect($request->get('redirect'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function show(Preferencia $preferencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Preferencia $preferencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $p = Preferencia::find($request->get('prefId'));
        $p->estagiario_id=$request->get('estagiarioId');
        $p->projeto_id=$request->get('projetoId');
        $p->prioridade=$request->get('prioridade');
        $p->save();
        return redirect($request->get('redirect'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preferencia $preferencia)
    {
        //
    }
}
