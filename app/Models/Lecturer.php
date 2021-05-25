<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecturer extends Model
{
    use HasFactory;

    public function articles() : HasMany
    {
        return $this->hasMany('App\Models\Article');
    }
    public function researches(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Research');
    }

    public function recognitions(): HasMany
    {
        return  $this->hasMany('App\Models\Recognition');
    }
}
