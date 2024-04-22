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
        Schema::create('fiches', function(Blueprint $table){
            $table->string('id_fiche', 10)->primary();
            $table->string('nom_fiche', 50)->nullable();
            $table->date('DateDebut_fiche')->nullable();
            $table->date('DateFin_fiche')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
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
