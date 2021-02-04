<?php

namespace App\Http\Controllers\api;

use App\Diretor;
use App\Estagiario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstagiarioResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Estagiario::all();
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
        $est = new Estagiario();
        $est->nome=$request->get('nome');
        $est->username=$request->get('username');
        $est->password=$request->get('password');
        $est->email=$request->get('email');
        $est->telemovel=$request->get('telemovel');
        $d = Diretor::find($request->get('diretorId'));
        $d->estagiarios()->save($est);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Estagiario::find($id);
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
        $est = Estagiario::find($id);
        $est->nome=$request->get('nome');
        $est->username=$request->get('username');
        $est->password=$request->get('password');
        $est->email=$request->get('email');
        $est->telemovel=$request->get('telemovel');
        $d = Diretor::find($request->get('diretorId'));
        $d->estagiarios()->save($est);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $est = Estagiario::find($id);
        if($est){
            $est->delete();
        }
    }
}
