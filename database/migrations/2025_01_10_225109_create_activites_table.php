<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type');
            $table->string('details');
            $table->decimal('quantite_co2');
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('activites');
    }
};
