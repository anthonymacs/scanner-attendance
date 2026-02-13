<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'subject_id',
        'schedule_id',
        'session_date',
        'start_time',
        'end_time',
        'session_type',
        'status',
        'notes',
    ];

    protected $casts = [
        'session_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'status' => 'string',
    ];

    // Relationships
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function attendanceLogs()
    {
        return $this->hasMany(AttendanceLog::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeForDate($query, $date)
    {
        return $query->whereDate('session_date', $date);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('session_date', today());
    }

    // Accessors
    public function getIsActiveAttribute()
    {
        return $this->status === 'active' && 
               now()->between($this->start_time, $this->end_time);
    }

    public function getIsCompletedAttribute()
    {
        return $this->end_time && now()->isAfter($this->end_time);
    }

    public function getAttendanceRateAttribute()
    {
        $total = $this->section->students()->count();
        if ($total === 0) return 0;
        
        $present = $this->attendances()
                        ->whereIn('status', ['present', 'late'])
                        ->count();
        
        return round(($present / $total) * 100, 2);
    }
}