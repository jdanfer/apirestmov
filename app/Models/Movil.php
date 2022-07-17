<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nromov',
        'descripcion',
        'medico_id',
        'enfermeri_id',
        'chofer_id',
    ];
}
