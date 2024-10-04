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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('insurance_number')->nullable(); // Número do convênio
            $table->text('medical_history')->nullable(); // Histórico médico
            $table->text('allergies')->nullable(); // Alergias conhecidas
            $table->string('blood_type', 3)->nullable(); // Tipo sanguíneo (ex: A+, O-)
            $table->string('emergency_contact')->nullable(); // Contato de emergência
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
