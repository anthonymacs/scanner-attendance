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
        Schema::create('attendance_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->nullable()->constrained()->onDelete('cascade'); // Can be section-specific or school-wide
            $table->integer('late_threshold_minutes')->default(15); // Minutes after start time to mark as late
            $table->boolean('allow_early_checkin')->default(true);
            $table->integer('early_checkin_minutes')->default(30); // How early students can check in
            $table->boolean('allow_checkout')->default(false);
            $table->boolean('require_location')->default(false);
            $table->string('allowed_location')->nullable(); // Geofence coordinates
            $table->integer('location_radius_meters')->nullable();
            $table->boolean('send_notifications')->default(true);
            $table->boolean('notify_guardians')->default(false); // SMS/Email to guardians for absences
            $table->boolean('auto_mark_absent')->default(false);
            $table->integer('absence_threshold')->default(3); // Consecutive absences before notification
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_settings');
    }
};