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
        Schema::create('molitura', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('frantoio');
            $table->string('terreno');
            $table->integer('kg_olive');
            $table->string('varieta');
            $table->integer('litri_olio');
            $table->decimal('resa', 5, 2);  // Percentuale, es. 10.50%
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('molitura');
    }
};
