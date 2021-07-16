<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) { 
            $table->id();
            $table->string('usuario_nombre');
            $table->string('tipo');
            $table->string('titulo');
            $table->string('descripcion',200);
            $table->text('contenido')->nullable();
            $table->string('imagen')->nullable();
            $table->string('video')->nullable();
            $table->string('documento')->nullable();
            $table->string('link')->nullable();

            $table->date('fecha_inicio');
            $table->date('fecha_fin');


            

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
        Schema::dropIfExists('publications');
    }
}
