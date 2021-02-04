<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Notificacao;
use App\Utilizador;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NotificacoesResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Notificacao::all();
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
        $n->data=Carbon::now();
        $u = Utilizador::find($request->get('utilizadorId'));
        $u->notificacoes()->save($n);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Notificacao::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $n = Notificacao::find($id);
        $n->enviadoPor=$request->get('enviadoPor');
        $n->mensagem=$request->get('mensagem');
        $n->data=Carbon::now();
        $u = Utilizador::find($request->get('utilizadorId'));
        $u->notificacoes()->save($n);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $n = Notificacao::find($id);
        if($n){
            $n->delete();
        }
    }
}
