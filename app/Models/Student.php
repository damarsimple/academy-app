<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $casts = ['graduated_at' => 'datetime'];
    public function studentselection(): HasOne
    {
        return $this->hasOne('App\Models\StudentSelection');
    }

    public function studyprogram(): BelongsTo
    {
        return $this->belongsTo('App\Models\Studyprogram');
    }
    public function studentcourses(): HasMany
    {
        return $this->hasMany('App\Models\StudentCourse');
    }

    public function getTotalIpkAttribute(): array
    {
        $studentcourses = $this->studentcourses()->get();

        return [
            'avg' => $studentcourses->avg('ipk') ?? 0,
            'max' => $studentcourses->max('ipk') ?? 0,
            'min' => $studentcourses->min('ipk') ?? 0,
        ];
    }

    public function graduation(): HasOne
    {
        return $this->hasOne('App\Models\Graduation');
    }
}
