<?php

namespace Database\Seeders;

use App\Models\Diente;
use Illuminate\Database\Seeder;

class DienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 11; $i <= 85; $i++){

            if($i == 19 || $i == 20 || $i == 29 || $i == 30 || $i == 39 || $i == 40 || $i == 49 || $i == 50 || $i >=56 && $i<=60 || $i >=66 && $i<=70 || $i >=76 && $i<=80){
                continue;
            }

            $diente = new Diente();
            $diente->numDiente = $i;
            //IF DE LADO DERECHO - Dividido en dos para Temporal o permanente
            //Permanente
            if($i>= 11 && $i <=18 || $i>= 41 && $i <=48){
                $diente->lado = 'Derecha';
                $diente->tipo = 'Permanente';
            }
            //Temporal
            elseif($i>= 51 && $i <=55 || $i>= 81 && $i <=85){
                $diente->lado = 'Derecha';
                $diente->tipo = 'Temporario';
            }
            else{
                $diente->lado = 'Izquierda';
                if($i >=61 && $i<=75){
                    $diente->tipo = 'Temporario';
                }
                else{
                    $diente->tipo = 'Permanente';
                }
            }
            $diente->save();
        }
    }
}
