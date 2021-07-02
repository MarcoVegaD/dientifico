<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    public function odontogramas()
    {
        return $this->hasMany(Odontograma::class, 'idDiagrama', 'idOdontograma');
    }
}
