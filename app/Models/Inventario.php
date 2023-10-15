<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'Inventario';
    protected $primaryKey = 'InventarioID';
    public $timestamps = false;
    
    protected $fillable = [
        'Accion',
        'Cantidad',
        'Id',
        'ProductoID',
        'UsuarioID',
    ];
    
}