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
        Schema::create('akmens', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->string('efekts');
            $table->integer('skaits');
            $table->integer('cena');
            $table->foreignId('zodiaks_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akmens');
    }
};