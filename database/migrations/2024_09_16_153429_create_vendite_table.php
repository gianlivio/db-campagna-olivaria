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
        Schema::create('vendite', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('numero')->nullable(); // Numero di telefono
            $table->string('email')->nullable();  // Email cliente
            $table->integer('quantita_ordinata');
            $table->decimal('costo_imbottigliamento', 10, 2);
            $table->decimal('costo_spedizione', 10, 2)->nullable();
            $table->decimal('incasso', 10, 2);
            $table->string('indirizzo_spedizione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendite');
    }
};
