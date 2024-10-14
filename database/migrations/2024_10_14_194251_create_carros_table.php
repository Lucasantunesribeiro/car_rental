<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 50);
            $table->string('marca', 50);
            $table->integer('ano');
            $table->string('cor', 20);
            $table->string('placa', 7)->unique();
            $table->decimal('diaria', 8, 2);
            $table->boolean('disponibilidade')->default(true);
            $table->string('imagem')->nullable();
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
        Schema::dropIfExists('carros'); // Remove a tabela se existir
    }
}
