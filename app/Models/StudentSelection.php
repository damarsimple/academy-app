<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentSelection extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo('App\Models\Student');
    }
}
