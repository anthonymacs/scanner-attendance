<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'late_threshold_minutes',
        'allow_early_checkin',
        'early_checkin_minutes',
        'allow_checkout',
        'require_location',
        'allowed_location',
        'location_radius_meters',
        'send_notifications',
        'notify_guardians',
        'auto_mark_absent',
        'absence_threshold',
    ];

    protected $casts = [
        'late_threshold_minutes' => 'integer',
        'allow_early_checkin' => 'boolean',
        'early_checkin_minutes' => 'integer',
        'allow_checkout' => 'boolean',
        'require_location' => 'boolean',
        'location_radius_meters' => 'integer',
        'send_notifications' => 'boolean',
        'notify_guardians' => 'boolean',
        'auto_mark_absent' => 'boolean',
        'absence_threshold' => 'integer',
    ];

    // Relationships
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    // Scopes
    public function scopeSchoolWide($query)
    {
        return $query->whereNull('section_id');
    }

    public function scopeSectionSpecific($query)
    {
        return $query->whereNotNull('section_id');
    }

    // Accessors
    public function getIsSchoolWideAttribute()
    {
        return is_null($this->section_id);
    }
}