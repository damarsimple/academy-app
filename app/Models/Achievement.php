<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{

    protected $casts = [
        'start_at'  => 'datetime:d-m-Y',
        'finish_at' => 'datetime:d-m-Y',
    ];

    use HasFactory;
}
