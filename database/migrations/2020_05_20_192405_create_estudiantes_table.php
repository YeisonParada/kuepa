<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nombres')->nullable();
            $table->string('Apellidos')->nullable();
            $table->string('Email')->unique();
            $table->integer('Telefono')->nullable();
            $table->string('Programa')->nullable();
            $table->integer('Contacto')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiantes');
    }
}
