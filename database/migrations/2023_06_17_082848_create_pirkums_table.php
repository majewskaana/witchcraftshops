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
        Schema::create('pirkums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('akmens_id')->constrained()->cascadeOnDelete();
            $table->foreignId('garsvielas_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kartis_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kompanija_id')->constrained()->cascadeOnDelete();
            $table->foreignId('veikals_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pirkums');
    }
};
