<?php

namespace App\Http\Controllers;

use App\Diretor;
use App\Entidade;
use App\Estagiario;
use App\Projeto;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{

    /**
     * @param int $id_estagiario
     *
     */
    public function home(int $id_estagiario)
    {
        $est = Estagiario::find($id_estagiario);
        return view('estagiario.home', ['estagiario'=>$est]);
    }

    /**
     * Permite visualizar detalhes da proposta inclusive:
     * Se o aluno já estiver atribuido
     *  O aluno atribuido ao projeto
     *  O Orientador
     *  O Supervisor
     *
     */
    public function verDetalhesProjeto(): void
    {
        //
    }

    /**
     * Permite estagiario escolher propostas do seu interesse
     * Estagiario indica propostas por ordem de preferência, no máximo até um número
     * especificado pelo diretor de curso (p. ex. 5 propostas)
     * @param int $id_entidade
     * @param int $id_projeto
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function escolherProjeto(int $id_entidade, int $id_projeto)
    {
        $e = Entidade::find($id_entidade);
        $p = Projeto::find($id_projeto);
        return view('estagiario.escolher_projeto', ['entidade'=>$e, 'projeto'=>$p]);
    }

    /**
     * Permite visualizar lista de propostas
     * @param int $id_entidade
     */
    public function listarProjetos(int $id_estagiario)
    {
        $est = Estagiario::find($id_estagiario);
        $p = Projeto::where('aprovado',1)->get();
        return view('estagiario.projetos', ['estagiario'=>$est, 'projeto'=>$p]);
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
    public function create(int $id_diretor)
    {
        $d = Diretor::find($id_diretor);
        return view('diretor.estagiario_criar', ['diretor'=>$d]);
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
        return redirect($request->get('redirect'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function show(Estagiario $estagiario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Estagiario $estagiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estagiario $estagiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estagiario  $estagiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estagiario $estagiario)
    {
        //
    }
}
