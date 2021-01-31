<?php

namespace App\Http\Controllers;

use App\Notificacao;
use App\Utilizador;
use Illuminate\Http\Request;
use Carbon;

class NotificacaoController extends Controller
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
        $n = new Notificacao();
        $n->enviadoPor=$request->get('enviadoPor');
        $n->mensagem=$request->get('mensagem');
        $n->data=Carbon\Carbon::now();
        $u = Utilizador::find($request->get('utilizadorId'));
        $u->notificacoes()->save($n);
        return redirect($request->get('redirect'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function show(Notificacao $notificacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificacao $notificacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacao $notificacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notificacao  $notificacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificacao $notificacao)
    {
        //
    }
}
