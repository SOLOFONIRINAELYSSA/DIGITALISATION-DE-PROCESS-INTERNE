<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->string('numEmp');
            $table->string('nomApprobateur');
            $table->string('typeConge');
            $table->integer('nbrjr');
            $table->integer('solde')->default(30);
            $table->integer('jours_reportes')->default(0);
            $table->string('motif')->nullable();
            $table->date('dateDebut');
            $table->date('dateFin');

            // ------------------ Foreig key ------------------
            $table->foreign('numEmp')->references('numEmp')->on('Employes')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conges');
    }
};
