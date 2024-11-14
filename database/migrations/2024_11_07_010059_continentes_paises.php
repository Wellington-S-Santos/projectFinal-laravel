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
        Schema::create('continentes_paises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('continente_id');
            $table->unsignedBigInteger('pais_id');
            
            // Definindo as chaves estrangeiras
            $table->foreign('continente_id')->references('id')->on('continentes')->onDelete('cascade');
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
            
            // Garantindo que a combinação de continente_id e pais_id seja única
            $table->unique(['pais_id', 'continente_id']); // A combinação de país e continente precisa ser única
    
            $table->timestamps();
        
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('continentes_paises', function (Blueprint $table) {
            $table->dropUnique(['pais_id', 'continente_id']);
    });
}
};
