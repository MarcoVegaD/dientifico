<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->string('telefono', 10);
            $table->string('estadoCivil', 45);
            $table->string('domicilio')->nullable();
            $table->string('email', 250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
            $table->enum('rol', ['Paciente', 'Medico'])->default('Paciente');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('idHistoriaGeneral')->nullable()->references('id')->on('historiaClinicaGenerals');
            $table->unsignedBigInteger('idHistoriaOdontologica')->nullable()->references('id')->on('historiaClinicaOdontologicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
