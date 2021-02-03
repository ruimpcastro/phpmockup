<?php

namespace App\Http\Controllers;

use App\Cronograma;
use App\Projeto;
use App\Entidade;
use Illuminate\Http\Request;

class ProjetoController extends Controller
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
    public function create(int $id_entidade)
    {
        $e = Entidade::find($id_entidade);
        return view('entidade.projeto_criar', ['entidade'=>$e]);
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

        $cronoCount = $request->get('cronoCount');

        if ($cronoCount > 0){
            $cronoTarefas = array();
            $cronoDuracoes = array();

            for ($i = 0; $i < $cronoCount; $i++){
                array_push($cronoTarefas, $request->get('crono_tarefa'.$i));
                array_push($cronoDuracoes, $request->get('crono_duracao'.$i));
            }

            for ($i = 0; $i < $cronoCount; $i++){
                $c = new Cronograma();
                $c->atividade=$cronoTarefas[$i];
                $c->duracao=$cronoDuracoes[$i];
                $p->cronogramas()->save($c);
            }
        }
        return redirect($request->get('redirect'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $p = Projeto::find($request->get('projetoId'));
        $p->titulo=$request->get('titulo');
        $p->descricao=$request->get('descricao');
        $p->objetivos=$request->get('objetivos');
        $p->perfilProfissional=$request->get('perfilProfissional');
        $p->aprovado=$request->get('aprovado');
        if($request->has('estagiarioId')){
            $p->estagiario_id = $request->get('estagiarioId');
        }
        if($request->has('entidadeId')){
            $p->entidade_id = $request->get('entidadeId');
        }
        if($request->has('supervisor')){
            $p->supervisor_id = $request->get('supervisor');
        }
        if($request->has('dataInicio')){
            $p->dataInicio = $request->get('dataInicio');
        }
        if($request->has('dataReuniao')){
            $p->dataReuniao = $request->get('dataReuniao');
        }
        $p->save();
        return redirect($request->get('redirect'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }
}
