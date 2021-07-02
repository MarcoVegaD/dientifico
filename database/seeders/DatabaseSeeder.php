<?php

namespace Database\Seeders;

use App\Models\HistoriaClinicaGeneral;
use App\Models\HistoriaClinicaOdontologica;
use App\Models\Odontograma;
use App\Models\RelacionPacienteOdontograma;
use App\Models\Tratamiento;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        HistoriaClinicaGeneral::factory(10)->create();
        HistoriaClinicaOdontologica::factory(10)->create();
        RelacionPacienteOdontograma::factory(10)->create();
        Odontograma::factory(10)->create();
        Tratamiento::factory(10)->create();

    }
}
