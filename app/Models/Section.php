<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'strand_id',
        'name',
        'grade_level',
        'school_year',
        'capacity',
        'adviser_id',
        'room',
        'status',
    ];

    protected $casts = [
        'capacity' => 'integer',
        'status' => 'string',
    ];

    // Relationships
    public function strand()
    {
        return $this->belongsTo(Strand::class);
    }

    public function adviser()
    {
        return $this->belongsTo(User::class, 'adviser_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function attendanceSessions()
    {
        return $this->hasMany(AttendanceSession::class);
    }

    public function attendanceSettings()
    {
        return $this->hasOne(AttendanceSettings::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }


    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeGrade11($query)
    {
        return $query->where('grade_level', 'Grade 11');
    }

    public function scopeGrade12($query)
    {
        return $query->where('grade_level', 'Grade 12');
    }

    public function scopeSchoolYear($query, $year)
    {
        return $query->where('school_year', $year);
    }

    // Accessors
    public function getFullNameAttribute()
    {
        return "{$this->strand->code} {$this->grade_level} - {$this->name}";
    }

    public function getAvailableSlotsAttribute()
    {
        return $this->capacity - $this->students()->count();
    }

    public function getIsFullAttribute()
    {
        return $this->students()->count() >= $this->capacity;
    }
}