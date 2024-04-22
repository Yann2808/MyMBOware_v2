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
            $table->id();
            $table->string('id_fiche', 10)->unique();
            $table->string('nom_fiche', 50)->nullable();
            $table->date('DateDebut_fiche')->nullable();
            $table->date('DateFin_fiche')->nullable();
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
