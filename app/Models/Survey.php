<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Survey extends Model
{
    use HasFactory;

    function students() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Student')->withPivot('code');
    }

    
}
