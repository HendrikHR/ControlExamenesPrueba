<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('cantidad');
            $table->string('url')->default(null);
            $table->timestamps();
        });

        Schema::create('preguntas',function (Blueprint $table){
            $table->id();
            $table->string('pregunta');
            $table->foreignId('examen_id')->references('id')->on('examens');
            $table->timestamps();
        });

        Schema::create('respuestas',function (Blueprint $table){
            $table->id();
            $table->string('respuesta');
            $table->string('valorcorrecto');
            $table->foreignId('pregunta_id')->references('id')->on('preguntas');
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
        Schema::dropIfExists('preguntas');
        Schema::dropIfExists('respuestas');
        Schema::dropIfExists('examens');
    }
}
