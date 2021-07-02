<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionPacienteOdontograma extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id', 'idUsuario');
    }

    public function odontograma()
    {
        return $this->belongsTo(Odontograma::class, 'idDiagrama', 'idOdontograma');
    }
}
