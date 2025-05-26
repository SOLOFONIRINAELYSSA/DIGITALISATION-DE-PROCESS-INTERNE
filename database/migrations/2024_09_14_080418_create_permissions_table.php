<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('numEmp');
            $table->string('NomPrenomDestinateur');
            $table->string('PosteDestinateur');
            $table->date('FaiLe');
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->string('Raison');
            $table->string('NomOrganisation');
            $table->string('Engagement');
            $table->string('Dispositions');

            // ------------------ Foreig key ------------------
            $table->foreign('numEmp')->references('numEmp')->on('Employes')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });

        
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
