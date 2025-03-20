<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('platos_pedidos', function (Blueprint $table) {
 
            $table->unsignedBigInteger('id_plato');
            $table->unsignedBigInteger('id_pedido');
            $table->timestamps();
            $table->foreign('id_plato')->references('id')->on('platos');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos_pedidos');
    }
};
