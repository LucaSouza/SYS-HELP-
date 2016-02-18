<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerifericosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perifericos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo',40);
            $table->string('descricao',60)->nullable();
            $table->string('interface',20)->nullable();
            $table->string('observacao',200)->nullable();
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
        Schema::drop('perifericos');
    }
}
