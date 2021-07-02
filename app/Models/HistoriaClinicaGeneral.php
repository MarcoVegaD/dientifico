<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaClinicaGeneral extends Model
{
    use HasFactory;

    /**
     * Get the usuario that owns the HistoriaClinicaGeneral
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idHistoriaClinicaGeneral', 'id');
    }
}
