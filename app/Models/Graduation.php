<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Graduation extends Model
{
    use HasFactory;

    protected $casts = [
        'has_job_at'  => 'datetime',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo('App\Models\Student');
    }
    
}
