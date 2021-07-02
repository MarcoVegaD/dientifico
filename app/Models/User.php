<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellidos',
        'fechaNacimiento',
        'telefono',
        'estadoCivil',
        'domicilio',
        'email',
        'password',
        'rol',
        'idHistoriaClinicaGeneral',
        'idHistoriaOdontologica'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* RELACIONES DE ELOQUENT */


    public function tratamientos()
    {
        //CLASE - ID de la tabla a la que vas - ID local del modelo
        return $this->hasMany(Tratamiento::class, 'idUsuario', 'id');
    }

    public function historiaClinicaGeneral()
    {
        return $this->hasOne(HistoriaClinicaGeneral::class, 'id', 'idHistoriaGeneral');
    }

    public function historiaClinicaOdontologica()
    {
        return $this->hasOne(HistoriaClinicaOdontologica::class, 'id', 'idHistoriaOdontologica');
    }

    public function relacionOdontograma()
    {
        return $this->hasMany(RelacionPacienteOdontograma::class, 'idUsuario', 'id');
    }

    /* 
        CLASE FINAL - 
        CLASE INTERMEDIA - 
        Llave foranea en clase intermedia, relacionando con modelo actual - 
        Llave foranea de la tabla final con intermedia - 
        Llave del modelo actual con la intermedia - 
        Llave local del modelo intermedio a relacionar con el final
        */ 
    public function odontogramas()
    {
        return $this->hasManyThrough(Odontograma::class, RelacionPacienteOdontograma::class, 'idUsuario', 'idDiagrama', 'id', 'idOdontograma');
    }

}
