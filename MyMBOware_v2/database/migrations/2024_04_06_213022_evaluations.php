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
        Schema::create('evaluations', function(Blueprint $table)
		{
			$table->string('id_eval', 50)->primary();
			$table->date('periodedebut_eval')->nullable();
			$table->date('periodefin_eval')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('evaluations');
    }
};