<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->string('CodeEntreprise')->primary();
            $table->string('NomEntreprise');
            $table->string('PosatalEntreprise');
            $table->string('VillEntreprise');
            $table->string('EmailEntreprise');
            $table->string('logoEntreprise');
            $table->timestamps();

            // Définir le moteur de stockage
            $table->engine = 'InnoDB';
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
