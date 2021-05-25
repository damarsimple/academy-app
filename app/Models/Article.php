<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $appends = ['citation_count'];
    
    public function lecturer(): BelongsTo
    {
        return $this->belongsTo('App\Models\Lecturer');
    }

    public function getCitationCountAttribute(): int
    {
        // TODO: GET CITATION COUNT FROM GOOGLE SCHOLARS
        return 0;
    }
}
