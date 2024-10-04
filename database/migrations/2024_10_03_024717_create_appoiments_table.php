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
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('dentist_id')->constrained('dentists')->onDelete('cascade');
            $table->dateTime('appoiment_date'); // Data e hora da consulta
            $table->tinyInteger('status'); // 1=Agendado, 2=Concluído, 3=Cancelado
            $table->text('reason')->nullable(); // Motivo da consulta
            $table->text('notes')->nullable(); // Notas sobre a consulta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoiments');
    }
};
