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
        Schema::create('taches', function(Blueprint $table){
            $table->string('id_tache', 25)->primary();
            $table->string('libelle_tache', 255);
            $table->string('description_tache');
            $table->decimal('progression_tache', 5);
            $table->date('DateDebut_tache');
            $table->date('DateFin_tache');
            $table->string('id_obj')->references('id_obj')->on('objectifs');
            $table->string('id_fiche')->references('id_fiche')->on('fiches');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('fiches');
    }
};
