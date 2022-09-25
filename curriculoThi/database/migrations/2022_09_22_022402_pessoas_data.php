<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PessoasData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->default('1');
            $table->string('idade')->default('1');
            $table->string('sexo')->default('1');
            $table->string('titulo')->default('1');
            $table->string('descricao')->default('1');
            $table->json('links')->default(json_encode(['database','via']));
            $table->json('competencias')->default(json_encode(['database','via']));;
            $table->json('observacao')->default(json_encode(['database','via']));;
            $table->json('idiomas')->default(json_encode(['database','via']));;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
