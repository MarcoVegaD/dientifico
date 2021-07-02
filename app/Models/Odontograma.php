<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    use HasFactory;

   
    public function dientes()
    {
        return $this->hasMany(Diente::class, 'id', 'idDiente');
    }

    public function relacionPacientes()
    {
        return $this->hasMany(RelacionPacienteOdontograma::class, 'idOdontograma', 'idDiagrama');
    }

    public function tratamiento()
    {
        return $this->belongsTo(Tratamiento::class, 'idOdontograma', 'idDiagrama');
    }
}
