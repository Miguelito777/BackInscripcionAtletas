<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_categoria', function (Blueprint $table) {        
            $table->increments('id');
            $table->string('nombre','50')->nullable();
            $table->string('descripcion','150')->nullable();
            $table->boolean('estado')->default('1');
            $table->timestamps();
        });

        Schema::create('tc_competicion', function (Blueprint $table){
            $table->increments('id');
            $table->text('descripcion')->nullable();
            $table->boolean('estado')->default('1');
            $table->year('anio')->nullable();
            $table->text('dedicatoria')->nullable();
            $table->timestamps();
        });       
        Schema::create('tt_atleta', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombres','75')->nullable();
            $table->string('apellidos','75')->nullable();
            $table->biginteger('dpi')->unique()->nullable();
            $table->enum('genero', ['Masculino','Femenino']);
            $table->string('telefono','30')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('descripcion');
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('tc_categoria');
            $table->unsignedInteger('id_competicion');
            $table->foreign('id_competicion')->references('id')->on('tc_competicion');
            $table->string('pais','30')->nullable();
            $table->string('direccion','175')->nullable();
            $table->timestamps();
        });

        
    }

  
    public function down()
    {
        Schema::dropIfExists('tc_categoria');
        Schema::dropIfExists('tc_competicion');
        Schema::dropIfExists('tt_atleta');
        Schema::dropIfExists('tc_localidad');
    }
}
