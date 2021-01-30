<?php

namespace App\Http\Controllers;

use App\Orientador;
use App\Entidade;
use Illuminate\Http\Request;

class OrientadorController extends Controller
{
    /**
     * Orientador home page
     */
    public function home(): void
    {
        //
    }

    public function verProjeto(): void
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
        $o = new Orientador();
        $o->nome=$request->get('nome');
        $o->email=$request->get('email');
        $o->telemovel=$request->get('telemovel');
        $e = Entidade::find($request->get('entidadeId'));
        $e->orientador()->save($o);
        return redirect("/login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function show(Orientador $orientador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function edit(Orientador $orientador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orientador $orientador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orientador  $orientador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orientador $orientador)
    {
        //
    }
}
