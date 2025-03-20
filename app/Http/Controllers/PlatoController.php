<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller
{
    public function indice(){
        $platos = Plato::paginate(5);
        return view('Platos',['platos'=>$platos]);
    }

    public function Inicio(){
        return view('Inicio');
    }



    public function formularioCliente(){
        return view('FormularioCliente');
    }

    public function almacenarPrecio($precio){
        if(session()->has('precio')){
            session()->increment('precio', $precio); 
        } else {
            session(['precio' => $precio]); 
        }
        return redirect()->route('indicePlatos', ['totalprecio' => session('precio')]);
    }

}
