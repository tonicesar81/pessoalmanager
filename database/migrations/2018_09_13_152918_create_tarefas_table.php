<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('nome');
            $table->dateTime('dtIni');
            $table->time('horaIni');
            $table->time('hotaFim');
            $table->integer('periodo')->nullable();
            $table->string('semanal')->nullable();
            $table->string('mensal')->nullable();
            $table->integer('concluido')->nullable();
            $table->dateTime('dtFim')->nullable();
            $table->timestamps();
        });
        
        Schema::table('tarefas', function($table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
