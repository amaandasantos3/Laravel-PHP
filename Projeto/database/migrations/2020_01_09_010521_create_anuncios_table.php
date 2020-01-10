<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 70);
            $table->text('descricao');
            $table->decimal('valor', 5, 2);
            $table->string('rua', 70);
            $table->string('bairro', 70);
            $table->string('cep', 70);
            $table->string('telefone', 70);
            $table->string('estado', 70);
            $table->string('cidade', 70);
            $table->string('arquivo', 560);
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
        Schema::dropIfExists('anuncios');
    }
}
