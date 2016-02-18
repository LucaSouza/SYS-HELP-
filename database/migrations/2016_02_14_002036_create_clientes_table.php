<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('identificacao',14)->nullable();
            $table->string('telefone',10)->nullable();
            $table->string('celular',11)->nullable();
            $table->string('rua',50)->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento',50)->nullable();
            $table->string('cep',10)->nullable();
            $table->string('cidade',40)->nullable();
            $table->char('uf',2)->nullable();
            $table->integer('tecnico')->unsigned();

            $table->foreign('tecnico')->references('id')->on('tecnicos');

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
        Schema::drop('clientes');
    }
}
