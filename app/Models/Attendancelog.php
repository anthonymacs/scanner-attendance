<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_code',
        'student_id',
        'attendance_session_id',
        'scanned_at',
        'scan_result',
        'failure_reason',
        'scanner_device',
        'ip_address',
        'location',
    ];

    protected $casts = [
        'scanned_at' => 'datetime',
        'scan_result' => 'string',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function attendanceSession()
    {
        return $this->belongsTo(AttendanceSession::class);
    }

    // Scopes
    public function scopeSuccess($query)
    {
        return $query->where('scan_result', 'success');
    }

    public function scopeFailed($query)
    {
        return $query->where('scan_result', 'failed');
    }

    public function scopeDuplicate($query)
    {
        return $query->where('scan_result', 'duplicate');
    }

    public function scopeExpired($query)
    {
        return $query->where('scan_result', 'expired');
    }

    public function scopeInvalid($query)
    {
        return $query->where('scan_result', 'invalid');
    }

    public function scopeForDate($query, $date)
    {
        return $query->whereDate('scanned_at', $date);
    }

    // Accessors
    public function getIsSuccessfulAttribute()
    {
        return $this->scan_result === 'success';
    }
}