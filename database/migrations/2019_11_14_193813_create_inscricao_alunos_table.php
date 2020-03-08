<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaoAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',5000);
            $table->string('email',5000);
            $table->bigInteger('matricula');
            $table->string('modalidade',5000);
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
        Schema::dropIfExists('inscricao_alunos');
    }
}
