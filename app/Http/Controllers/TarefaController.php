<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       

    }

    public function index()
    {
        return Tarefa::all();
    }

    public function show($tarefa)
    {

        return Tarefa::find($tarefa);
    }

    public function store(Request $request){

        $data_hora = date("Y/m/d H:i:s");

        $tarefa = new Tarefa();
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->feita = $request->feita;
        $tarefa->tipo_id = $request->tipo_id;
        $tarefa->created_at = $data_hora;
        $tarefa->save();

        return response()->json(['message' => 'Tarefa cadastrada com sucesso']);

    }

    public function update(Request $request, $tarefa){

        $data_hora = date("Y/m/d H:i:s");

        $tarefa = Tarefa::find($tarefa);
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->feita = $request->feita;
        $tarefa->tipo_id = $request->tipo_id;
        $tarefa->updated_at = $data_hora;
        $tarefa->update();

        return response()->json(['message' => 'Tarefa atualizada com sucesso']);

    }

    public function destroy($tarefa){

        $tarefa = Tarefa::find($tarefa);
        $tarefa->delete();   
        
        return response()->json(['message' => 'Tarefa excluída com sucesso']);
    }
}
