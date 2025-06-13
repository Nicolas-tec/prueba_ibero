<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Factori\HasFactori;

class inventario extends Model
{
    use HasFactori;
    public $timestamps = false;
    protected $fillable = [
        'Nombre_producto',
        'Precio',
        'Descripcion',
        'Tipo',
        'stock',
        'Fecha_creacion'];
}
