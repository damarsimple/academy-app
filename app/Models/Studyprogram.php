<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studyprogram extends Model
{
    use HasFactory;

    public function students(): HasMany
    {
        return $this->hasMany('App\Models\Student');
    }

    public function thisyearstudents(): HasMany
    {
        return $this->hasMany('App\Models\Student')->whereYear('created_at', now()->year);
    }
}
