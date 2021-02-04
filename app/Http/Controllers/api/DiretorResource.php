<?php

namespace App\Http\Controllers\api;

use App\Diretor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiretorResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Diretor::all();
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
        $d = new Diretor();
        $d->nome=$request->get('nome');
        $d->email=$request->get('email');
        $d->telemovel=$request->get('telemovel');
        $d->username=$request->get('username');
        $d->password=$request->get('password');
        $d->dataPubliPropostas=$request->get('dataPubliPropostas');
        $d->maxPrefs=$request->get('maxPrefs');
        $d->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Diretor::find($id);
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
        $d = Diretor::find($id);
        $d->nome=$request->get('nome');
        $d->email=$request->get('email');
        $d->telemovel=$request->get('telemovel');
        $d->username=$request->get('username');
        $d->password=$request->get('password');
        $d->dataPubliPropostas=$request->get('dataPubliPropostas');
        $d->maxPrefs=$request->get('maxPrefs');
        $d->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Diretor::find($id);
        if($d){
            $d->delete();
        }
    }
}
