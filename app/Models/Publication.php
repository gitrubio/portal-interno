<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory; 

    protected $fillable = ['usuario_nombre','tipo','titulo', 'descripcion', 'contenido', 'imagen', 'video', 'documento', 'link', 'fecha_inicio', 'fecha_fin'];
}
