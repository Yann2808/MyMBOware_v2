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
        Schema::create('competences', function(Blueprint $table)
		{
			$table->string('id_comp', 50)->primary();
			$table->string('nom_comp', 50)->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('competences');
    }
};
