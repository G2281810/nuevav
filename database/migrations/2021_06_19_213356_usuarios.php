<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idusuario')->comment('Identificador');
            $table->string('nombre',80)->comment('Nombre del usuario');
            $table->string('apellidop',80)->comment('Apellido paterno del usuario');
            $table->string('apellidom',80)->comment('Apellido materno del usuario');
            $table->string('sexo',5)->comment('Sexo del usuario');
            $table->string('fechanacimiento',80)->comment('Fecha de nacimiento del usuario');
            $table->string('edad',80)->comment('Edad del usuario');
            $table->string('telefono',80)->comment('Telefono de usuario');
            $table->string('email',50)->unique()->comment('E-mail del usuario');
            $table->string('tiposangre',50)->comment('Tipo de sangre');
            $table->string('password',50)->comment('Password del usuario');
            $table->integer('idmun')->unsigned();
            $table->foreign('idmun')->references('idmun')->on('municipios');

            $table->integer('idmedico')->unsigned();
            $table->foreign('idmedico')->references('idmedico')->on('medicos');
            
            $table->string('tipou',80)->comment('Apellido materno del usuario');

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
        Schema::dropIfExists('usuarios');
    }
}
