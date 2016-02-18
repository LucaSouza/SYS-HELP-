<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('modelo',40);
            $table->string('so',30);
            $table->string('observacao',200)->nullable();
            $table->string('ip',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('nome',20)->nullable();
            $table->string('grupo',20)->nullable();
            $table->string('programas',200)->nullable();
            $table->integer('cliente')->unsigned();

            $table->foreign('cliente')->references('id')->on('clientes');
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
        Schema::drop('computadors');
    }
}
