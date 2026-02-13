<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'section_id',
        'teacher_id',
        'school_year',
        'day_of_week',
        'start_time',
        'end_time',
        'room',
        'building',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    // Relationships
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function attendanceSessions()
    {
        return $this->hasMany(AttendanceSession::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeForDay($query, $day)
    {
        return $query->where('day_of_week', $day);
    }

    public function scopeToday($query)
    {
        return $query->where('day_of_week', now()->format('l'));
    }

    public function scopeForTeacher($query, $teacherId)
    {
        return $query->where('teacher_id', $teacherId);
    }

    public function scopeForSection($query, $sectionId)
    {
        return $query->where('section_id', $sectionId);
    }

    public function scopeSchoolYear($query, $year)
    {
        return $query->where('school_year', $year);
    }

    // Accessors
    public function getFullScheduleAttribute()
    {
        return "{$this->day_of_week} {$this->start_time} - {$this->end_time}";
    }

    public function getDurationMinutesAttribute()
    {
        $start = \Carbon\Carbon::parse($this->start_time);
        $end = \Carbon\Carbon::parse($this->end_time);
        return $start->diffInMinutes($end);
    }

    public function getIsNowAttribute()
    {
        if ($this->day_of_week !== now()->format('l')) {
            return false;
        }

        $now = now()->format('H:i');
        return $now >= $this->start_time && $now <= $this->end_time;
    }
}