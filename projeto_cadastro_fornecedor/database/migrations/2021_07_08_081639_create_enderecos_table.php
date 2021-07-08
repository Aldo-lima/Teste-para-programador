<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep',20);
            $table->string('logradouro', 50);
            $table->integer('numero');
            $table->string('complemento',10)->nullable();
            $table->string('bairro', 50);
            $table->string('ponto_referencia', 50)->nullable();
            $table->string('uf', 5);
            $table->string('cidade', 50);
            $table->string('condominio', 5);
            $table->foreignId('fornecedor_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('enderecos');
    }
}
