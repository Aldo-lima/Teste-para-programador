<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 20);
            $table->string('nome_fantasia',150);
            $table->string('apelido', 50)->nullable();
            $table->string('razaosocial', 150)->nullable();
            $table->string('indicador_de_inscricao_estadual')->nullable();
            $table->string('inscricao_estadual',50)->nullable();
            $table->string('inscricao_municipal',50)->nullable();
            $table->string('situacao-cnpj',10)->nullable();
            $table->string('recolhimento',20)->nullable();
            $table->string('ativo',10);
            $table->string('rg',15)->nullable();
            $table->string('cnpj_cpf',50);
            $table->text('observacao')->nullable();
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
        Schema::dropIfExists('fornecedors');
    }
}
