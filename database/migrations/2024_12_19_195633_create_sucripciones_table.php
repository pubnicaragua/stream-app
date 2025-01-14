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
        Schema::create('sucripciones', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['basico', 'stardard', 'premium']);
            $table->decimal('precio', 8, 2);
            $table->enum('estado', ['activo', 'inactivo'])->default('inactivo');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucripciones');
    }
};
