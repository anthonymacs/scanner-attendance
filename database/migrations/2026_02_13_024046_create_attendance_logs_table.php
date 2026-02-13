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
        Schema::create('attendance_logs', function (Blueprint $table) {
            $table->id();
            $table->string('qr_code')->nullable();
            $table->foreignId('student_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('attendance_session_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamp('scanned_at');
            $table->enum('scan_result', ['success', 'failed', 'duplicate', 'expired', 'invalid'])->default('success');
            $table->string('failure_reason')->nullable();
            $table->string('scanner_device')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();

            $table->index(['scanned_at', 'scan_result']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_logs');
    }
};