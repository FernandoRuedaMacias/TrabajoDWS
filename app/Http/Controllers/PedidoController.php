<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function indice(){
        //link https://stackoverflow.com/questions/24860973/laravel-how-to-get-last-n-entries-from-db
        $pedidos = Pedido::latest()->take(10)->get();
        return view('Pedidos',['pedidos'=>$pedidos]);
    }

}
