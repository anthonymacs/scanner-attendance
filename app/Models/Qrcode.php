<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'qr_code',
        'qr_image_path',
        'generated_at',
        'expires_at',
        'status',
    ];

    protected $casts = [
        'generated_at' => 'datetime',
        'expires_at' => 'datetime',
        'status' => 'string',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeExpired($query)
    {
        return $query->where('status', 'expired')
                    ->orWhere(function ($q) {
                        $q->whereNotNull('expires_at')
                          ->where('expires_at', '<', now());
                    });
    }

    public function scopeValid($query)
    {
        return $query->where('status', 'active')
                    ->where(function ($q) {
                        $q->whereNull('expires_at')
                          ->orWhere('expires_at', '>', now());
                    });
    }

    // Accessors
    public function getIsExpiredAttribute()
    {
        if ($this->status === 'expired' || $this->status === 'revoked') {
            return true;
        }

        if ($this->expires_at) {
            return $this->expires_at->isPast();
        }

        return false;
    }

    public function getIsValidAttribute()
    {
        return $this->status === 'active' && !$this->is_expired;
    }

    public function getQrImageUrlAttribute()
    {
        return $this->qr_image_path ? asset('storage/' . $this->qr_image_path) : null;
    }
}