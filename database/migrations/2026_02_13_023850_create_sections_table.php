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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('strand_id')->constrained()->onDelete('cascade');
            $table->string('name'); // e.g., "A", "B", "Einstein", "Newton"
            $table->enum('grade_level', ['Grade 11', 'Grade 12']);
            $table->string('school_year'); // e.g., "2024-2025"
            $table->integer('capacity')->default(40); // Maximum number of students
            $table->foreignId('adviser_id')->nullable()->constrained('users')->onDelete('set null'); // Class adviser
            $table->string('room')->nullable();
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active');
            $table->timestamps();

            // Unique constraint: One section name per strand, grade level, and school year
            $table->unique(['strand_id', 'name', 'grade_level', 'school_year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};