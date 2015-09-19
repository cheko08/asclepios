<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('paciente_id');
            $table->integer('dieta_id');
            $table->integer('cita_id');
            $table->integer('peso_kilos');
            $table->integer('imc');
            $table->integer('porcentaje_grasa');
            $table->integer('hidratacion');
            $table->text('comentarios');
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
        //
    }
}
