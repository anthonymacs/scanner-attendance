<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strand extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'track',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    // Relationships
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeAcademic($query)
    {
        return $query->where('track', 'Academic');
    }

    public function scopeTvl($query)
    {
        return $query->where('track', 'Technical-Vocational-Livelihood');
    }
}