<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoPrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_principals', function (Blueprint $table) {
            $table->id();
            $table->string('telefone', 15);
            $table->string('tipo_telefone', 15);
            $table->string('email', 50);
            $table->string('tipo_email', 50);
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
        Schema::dropIfExists('contato_principals');
    }
}
