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
        Schema::create('conseils', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('conseil');
            $table->float('carbone_saved');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('conseils');
    }
};
