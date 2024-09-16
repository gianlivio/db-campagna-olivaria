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
        Schema::create('spese_breve_termine', function (Blueprint $table) {
            $table->id();
            $table->decimal('molitura', 10, 2); // Importo spesa molitura
            $table->decimal('operai', 10, 2);   // Importo spesa operai
            $table->decimal('benza', 10, 2);    // Importo spesa carburante
            $table->decimal('spedizioni', 10, 2); // Importo spesa spedizioni
            $table->decimal('imbottigliamento', 10, 2); // Importo spesa imbottigliamento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spese_breve_termine');
    }
};
