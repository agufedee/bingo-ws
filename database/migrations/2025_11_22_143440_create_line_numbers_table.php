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
        Schema::create('line_numbers', function (Blueprint $table) {
            $table->id();
            
            // Clave Foránea a la tabla 'lines'
            $table->foreignId('line_id')->constrained('lines')->onDelete('cascade');
            $table->unsignedTinyInteger('number');
            $table->boolean('is_marked')->default(false);
            $table->timestamps();

            $table->unique(['line_id', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_numbers');
    }
};
