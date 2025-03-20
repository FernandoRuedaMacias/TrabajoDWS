<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaDelivery extends Model
{
    private $id;
    private $nombre;
    private $email;
    use HasFactory;
}
