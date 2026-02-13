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
        Schema::create('strands', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // STEM, HUMSS, ABM, GAS, TVL, ARTS & DESIGN, SPORTS
            $table->string('name'); // Full name
            $table->text('description')->nullable();
            $table->enum('track', ['Academic', 'Technical-Vocational-Livelihood', 'Arts and Design', 'Sports'])->default('Academic');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strands');
    }
};