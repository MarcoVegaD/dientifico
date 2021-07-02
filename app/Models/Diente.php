<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diente extends Model
{
    use HasFactory;

    public function odontograma()
    {
        return $this->belongsTo(Odontograma::class, 'idDiente', 'id');
    }
}
