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
        Schema::create('departements', function(Blueprint $table){
            $table->id();
            $table->string('code_dep', 25)->unique();
            $table->string('nom_dep', 100)->nullable();
            $table->string('code_dir')->references('code_dir')->on('directions'); //primaryKey on table Direction
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('departements');
    }
};
