<?php

namespace App\Http\Controllers;
use App\Models\Continentes;
use Illuminate\Http\Request;


class ContinentesController extends Controller
{
    public function criar(Request $request){
        $continentes = new Continentes;
        $continentes-> name = $request->name;
        $continentes->descricao = $request->descricao;
        $continentes->tamanho = $request->tamanho;

        $continentes->save();

        return redirect('/listar_continentes');
    }
    public function formCadastrarContinentes(){
        return view("cadastrar_continentes");
    }

    public function listar(){
        $continentes = Continentes::all();
        return view("continentes", ["continentes"=> $continentes]);
    }
}
