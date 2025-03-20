<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    private $id;
    private $nombre;
    private $telefono;
    private $tarjeta_credito;
    use HasFactory;
}
