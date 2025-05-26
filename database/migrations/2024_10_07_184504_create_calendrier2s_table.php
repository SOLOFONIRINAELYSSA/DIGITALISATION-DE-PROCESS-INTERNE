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
        Schema::create('calendrier2s', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->string('Description');
            $table->date('DateDebu');
            $table->date('DateFin');
            $table->time('TimeDebu');
            $table->time('TimeFin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendrier2s');
    }
};
