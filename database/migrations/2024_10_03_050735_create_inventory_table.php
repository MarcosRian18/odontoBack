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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('item_name'); // Nome do item
            $table->text('description')->nullable(); // Descrição do item
            $table->integer('quantity'); // Quantidade disponível
            $table->integer('restock_level'); // Nível mínimo para reabastecimento
            $table->decimal('unit_price', 10, 2); // Preço por unidade
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
