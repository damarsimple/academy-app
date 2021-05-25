<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;

    public function courses() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Course');
    }

    public function studentcourses(): HasMany
    {
        return $this->hasMany('App\Models\StudentCourse');
    }

}
