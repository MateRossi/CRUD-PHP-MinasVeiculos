<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculosController extends Controller
{
    public function create(){
        return view('veiculos.create');
    }

    public function store(Request $request){
        Veiculo::create([
            'modelo' => $request->modelo,
            'marca' => $request->marca,
            'ano' => $request->ano,
            'cor' => $request->cor,
            'precoTabela' => $request->precoTabela,
        ]);   
        //alterar aqui para retornar uma view após a operação ser concluída = return view('veiculos.listar', talvez) 
        return view('veiculos.createSuccess');
    }

    public function show(){
        $veiculos = Veiculo::all();
        return view('veiculos.todos', ['veiculos' => $veiculos]);
    }

    public function destroy($id){
        $veiculo=Veiculo::findOrFail($id);
        $veiculo->delete();
        return view('veiculos.deleteSuccess');
    }

    public function edit($id){
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.editar', ['veiculo' => $veiculo]);
    }

    public function update(Request $request, $id){
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update([
            'modelo' => $request->modelo,
            'marca' => $request->marca,
            'ano' => $request->ano,
            'cor' => $request->cor,
            'precoTabela' => $request->precoTabela,
        ]);
        return view('veiculos.editSuccess');
    }
}
