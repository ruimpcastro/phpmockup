<?php

namespace App\Http\Controllers\api;

use App\Entidade;
use App\Http\Controllers\Controller;
use App\Projeto;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;

class ProjetosResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Projeto::all();
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
        $p = new Projeto();
        $p->titulo=$request->get('titulo');
        $p->descricao=$request->get('descricao');
        $p->objetivos=$request->get('objetivos');
        $p->perfilProfissional=$request->get('perfilProfissional');
        $p->aprovado=$request->get('aprovado');
        $e = Entidade::find($request->get('entidadeId'));
        $e->projetos()->save($p);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Projeto::find($id);
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
    public function update(Request $request, $id)
    {
        $p = Projeto::find($id);
        $p->titulo=$request->get('titulo');
        $p->descricao=$request->get('descricao');
        $p->objetivos=$request->get('objetivos');
        $p->perfilProfissional=$request->get('perfilProfissional');
        $p->aprovado=$request->get('aprovado');
        $e = Entidade::find($request->get('entidadeId'));
        $e->projetos()->save($p);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Projeto::find($id);
        if($p){
            $p->delete();
        }
    }
}
