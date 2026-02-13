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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attendance_session_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('qr_code_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamp('check_in_time');
            $table->timestamp('check_out_time')->nullable();
            $table->enum('status', ['present', 'late', 'absent', 'excused'])->default('present');
            $table->string('location')->nullable(); // GPS coordinates or room
            $table->string('device_info')->nullable(); // Device used for scanning
            $table->string('ip_address')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();

            // Prevent duplicate check-ins for same session
            $table->unique(['attendance_session_id', 'student_id']);
            $table->index(['student_id', 'check_in_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};