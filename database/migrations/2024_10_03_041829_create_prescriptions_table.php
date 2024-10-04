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
        Schema::create('prescription', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appoiment_id')->constrained('appoiments')->onDelete('cascade');
            $table->string('medication_name'); // Nome do medicamento
            $table->string('dosage'); // Dosagem recomendada
            $table->string('duration'); // Duração do tratamento medicamentoso
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription');
    }
};
