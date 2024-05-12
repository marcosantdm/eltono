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
        Schema::table('vocalistas', function (Blueprint $table) {
            $table->dropColumn('nome_louvor');
            $table->dropColumn('nome_versao_louvor');
            $table->dropColumn('tonalidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vocalistas', function (Blueprint $table) {
            $table->string('nome_louvor');
            $table->string('nome_versao_louvor');
            $table->string('tonalidade');
        });
    }
};
