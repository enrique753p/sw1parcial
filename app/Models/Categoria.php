<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'Categoria';    
    public $timestamps = false;    
    protected $fillable = [        
        'Nombre',        
    ];    
}
