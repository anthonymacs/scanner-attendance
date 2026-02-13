<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'category',
        'strand_id',
        'grade_level',
        'semester',
        'hours_per_week',
        'status',
    ];

    protected $casts = [
        'hours_per_week' => 'integer',
        'status' => 'string',
    ];

    // Relationships
    public function strand()
    {
        return $this->belongsTo(Strand::class);
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

    public function scopeCore($query)
    {
        return $query->where('category', 'Core');
    }

    public function scopeApplied($query)
    {
        return $query->where('category', 'Applied');
    }

    public function scopeSpecialized($query)
    {
        return $query->where('category', 'Specialized');
    }

    public function scopeForStrand($query, $strandId)
    {
        return $query->where(function ($q) use ($strandId) {
            $q->whereNull('strand_id')
              ->orWhere('strand_id', $strandId);
        });
    }

    public function scopeGrade11($query)
    {
        return $query->whereIn('grade_level', ['Grade 11', 'Both']);
    }

    public function scopeGrade12($query)
    {
        return $query->whereIn('grade_level', ['Grade 12', 'Both']);
    }

    public function scopeSemester($query, $semester)
    {
        return $query->where('semester', $semester);
    }

    // Accessors
    public function getIsStrandSpecificAttribute()
    {
        return !is_null($this->strand_id);
    }
}