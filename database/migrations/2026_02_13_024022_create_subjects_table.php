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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // e.g., "ENG11", "MATH11", "GEN-BIO1"
            $table->string('name'); // Subject name
            $table->text('description')->nullable();
            $table->enum('category', ['Core', 'Applied', 'Specialized'])->default('Core'); // Subject categories in SHS
            $table->foreignId('strand_id')->nullable()->constrained()->onDelete('cascade'); // Specialized subjects are strand-specific
            $table->enum('grade_level', ['Grade 11', 'Grade 12', 'Both'])->default('Both');
            $table->string('semester'); // "1st Semester", "2nd Semester", "Full Year"
            $table->integer('hours_per_week')->default(4);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};