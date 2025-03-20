<?php

namespace App\Http\Controllers;

use App\Models\EmpresaDelivery;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function nombre_de_empresas(){
        $nombrempresas = EmpresaDelivery::all();
        return view('FormularioCliente',['nombrempresas'=>$nombrempresas]);
    }

    public function indice(){
        $empresas = EmpresaDelivery::paginate(5);
        return view('Empresas',['empresas'=>$empresas]);
    }
}
