<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{

    private $id;
    private $nombre;
    private $precio;

    use HasFactory;
}
