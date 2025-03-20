<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    private $id;
    private $id_cliente;
    private $precio_total;

    use HasFactory;
}
