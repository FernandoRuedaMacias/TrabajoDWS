<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatosCliente;
use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function AnyadirCliente(DatosCliente $request){
        $nuevocliente = new Cliente;
        $nuevocliente->nombre = $request->nombre;
        $nuevocliente->telefono = $request->telefono;
        $nuevocliente->tarjeta_credito = $request->tarj_credito;
        $nuevocliente->save();
    
        $nuevoPedido = new Pedido;
        $nuevoPedido->id_cliente =  $nuevocliente->id;
        $nuevoPedido->precio_total = session('precio', 0); 
        $nuevoPedido->save();
    
        session(['precio' => 0]); 
    
        return redirect()->route('FinPedido');
    }

    public function findelpedido(){
        return view('FinPedido');
    }
    
}
