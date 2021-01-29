<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{

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
     * especificado pelo diretor de curso (p. ex. 5 propostas
     */
    public function escolherProjeto(): void
    {
        //
    }
    /**
     * Permite visualizar lista de propostas
     *
     */
    public function verListaProjetos(): void
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
        //
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
