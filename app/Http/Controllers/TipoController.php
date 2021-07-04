<?php

namespace App\Http\Controllers;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
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
        return Tipo::all();
    }

    public function show($tipo)
    {

        return Tipo::find($tipo);
    }

    public function store(Request $request){

        $data_hora = date("Y/m/d H:i:s");

        $tipo = new Tipo();
        $tipo->nome = $request->nome;
        $tipo->created_at = $data_hora;
        $tipo->save();

        return response()->json(['message' => 'Tipo cadastrado com sucesso']);

    }

    public function update(Request $request, $tipo){

        $data_hora = date("Y/m/d H:i:s");

        $tipo = Tipo::find($tipo);
        $tipo->nome = $request->nome;
        $tipo->updated_at = $data_hora;
        $tipo->update();

        return response()->json(['message' => 'tipo atualizado com sucesso']);

    }

    public function destroy($tipo){

        $tipo = tipo::find($tipo);
        $tipo->delete();   
        
        return response()->json(['message' => 'tipo excluído com sucesso']);
    }
}
