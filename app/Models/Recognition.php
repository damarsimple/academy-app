<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recognition extends Model
{
    use HasFactory;

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo('App\Models\Lecturer');
    }


}
