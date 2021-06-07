<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Research extends Model
{
    use HasFactory;

    public function lecturers(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Lecturer');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Student');
    }
}
