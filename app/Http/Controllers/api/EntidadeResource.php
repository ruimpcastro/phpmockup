<?php

namespace App\Http\Controllers\api;

use App\Diretor;
use App\Entidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntidadeResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Entidade::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Entidade::find($id);
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
        $e = Entidade::find($id);
        $e->nome=$request->get('nome');
        $e->abreviatura=$request->get('abreviatura');
        $e->descricao=$request->get('descricao');
        $d = Diretor::find($request->get('diretorId'));
        $d->entidades()->save($e);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = Entidade::find($id);
        if($e){
            $e->delete();
        }
    }
}
