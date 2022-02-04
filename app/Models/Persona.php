<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public $fillable = [
        'nombres', 'apellidos', 'tipo_documento', 'num_documento', 'qr'
    ];
}
