<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('alimentos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('dia');
            $table->integer('dieta_id');
            $table->string('tipo');
            $table->double('calorias');
            $table->double('grasas'); 
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
         Schema::drop('alimentos');
    }
}
