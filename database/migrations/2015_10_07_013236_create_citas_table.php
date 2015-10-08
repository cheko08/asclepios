<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('citas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('paciente_id');
            $table->date('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
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
         Schema::drop('citas');
    }
}
