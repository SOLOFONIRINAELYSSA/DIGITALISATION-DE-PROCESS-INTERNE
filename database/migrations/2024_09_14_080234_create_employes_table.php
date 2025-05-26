<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->string('numEmp')->primary();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Sexe');
            $table->date('Naissance');
            $table->string('Adresse');
            $table->string('Numero');
            $table->string('Email');
            $table->string('Poste');
            $table->date('DatEntre');
            // $table->string('CodeEntreprise');
            $table->string('Postal');
            $table->string('Ville');
            $table->string('images');

            // ---------------- Foreigne key ----------------
            // $table->foreign('CodeEntreprise')->references('CodeEntreprise')->on('entreprises')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();

            // Définir le moteur de stockage
            $table->engine = 'InnoDB';
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
