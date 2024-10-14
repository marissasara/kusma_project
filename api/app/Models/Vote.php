<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vote extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s', // Format as datetime
    ];
}