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
        Schema::create('details', function(Blueprint $table)
		{
            $table->string('id_eval', 50)->references('id_eval')->on('evaluations');
            $table->string('id_comp', 50)->references('id_comp')->on('competences');
			// $table->foreignid('id_eval', 50)->references('id_eval')->on('evaluations');
			// $table->foreignid('id_comp', 50)->references('id_comp')->on('competences');
			$table->string('note', 50)->nullable();
			$table->primary(['id_eval','id_comp']);
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