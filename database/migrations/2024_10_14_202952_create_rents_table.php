<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carro_id')->constrained('carros')->onDelete('cascade'); // Referência à tabela 'carros'
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->decimal('valor_total', 10, 2); // Adiciona a coluna valor_total
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
