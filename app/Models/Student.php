<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'grade_level',
        'strand_id',
        'section_id',
        'date_of_birth',
        'age',
        'gender',
        'address',
        'guardian_name',
        'guardian_phone',
        'photo',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'age' => 'integer',
        'status' => 'string',
    ];

    protected $appends = [
        'full_name',
    ];

    // Relationships
    public function strand()
    {
        return $this->belongsTo(Strand::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function qrCodes()
    {
        return $this->hasMany(QrCode::class);
    }

    public function activeQrCode()
    {
        return $this->hasOne(QrCode::class)->where('status', 'active')->latest();
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

    public function scopeGrade11($query)
    {
        return $query->where('grade_level', 'Grade 11');
    }

    public function scopeGrade12($query)
    {
        return $query->where('grade_level', 'Grade 12');
    }

    public function scopeByStrand($query, $strandId)
    {
        return $query->where('strand_id', $strandId);
    }

    public function scopeBySection($query, $sectionId)
    {
        return $query->where('section_id', $sectionId);
    }

    // Accessors
    public function getFullNameAttribute()
    {
        $middleInitial = $this->middle_name ? ' ' . substr($this->middle_name, 0, 1) . '.' : '';
        return "{$this->first_name}{$middleInitial} {$this->last_name}";
    }

    public function getCalculatedAgeAttribute()
    {
        return $this->date_of_birth ? $this->date_of_birth->age : null;
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/' . $this->photo) : null;
    }
}