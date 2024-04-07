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
        Schema::create('objectifs', function(Blueprint $table){
            $table->string('id_obj', 25)->primary();
            $table->string('libelle_obj', 100)->nullable();
            $table->date('Deadline')->nullable();
            $table->string('code_dep', 25)->references('code_dep')->on('departements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('objectifs');
    }
};