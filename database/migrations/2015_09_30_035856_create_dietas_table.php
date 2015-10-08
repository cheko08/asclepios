<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dietas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('numero_calorias');
            $table->string('tipo_dieta');
            $table->text('informacion_nutrimental');
            $table->text('informacion_nutrimental_1');
            $table->text('informacion_nutrimental_2');
            $table->text('informacion_nutrimental_3');
            $table->text('informacion_nutrimental_4');
            $table->text('informacion_nutrimental_5');
            $table->text('informacion_nutrimental_6');
            $table->text('informacion_nutrimental_7');       
            $table->softDeletes();
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
         Schema::drop('dietas');
    }
}
