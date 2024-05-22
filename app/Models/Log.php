<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['log_type', 'data','claim_id'];
    protected $casts = [
        'data' => 'json',
    ];
}
