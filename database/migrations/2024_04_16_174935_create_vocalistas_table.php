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
        Schema::create('vocalistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_vocalista');
            $table->string('nome_louvor');
            $table->string('nome_versao_louvor');
            $table->string('tonalidade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocalistas');
    }
};
