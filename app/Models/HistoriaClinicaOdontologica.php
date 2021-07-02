<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaClinicaOdontologica extends Model
{
    use HasFactory;

    /**
     * Get the usuario that owns the HistoriaClinicaOdontologica
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idHistoriaOdontologica', 'id');
    }
}
