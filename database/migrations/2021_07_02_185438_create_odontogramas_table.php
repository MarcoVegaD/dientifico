<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdontogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontogramas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idDiente')->references('id')->on('Dientes');
            $table->integer('idDiagrama');
            $table->boolean('carie');
            $table->boolean('restauracion');
            $table->boolean('ausente');
            $table->boolean('protesisFija');
            $table->boolean('protesisRemovible');
            $table->boolean('corona');
            $table->text('notaDiente')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odontogramas');
    }
}
