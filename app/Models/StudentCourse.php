<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentCourse extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo('App\Models\Semester');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function getIsFinishAttribute(): bool
    {
        return empty($this->finish_at);
    }
}
