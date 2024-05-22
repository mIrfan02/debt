<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory, HasUuids;



    protected $fillable = [
        'cost',
        'amount',
        'comment',
        'date_incurred',
        'claim_id',
    ];

    public function claim()
    {
        return $this->belongsTo(Claim::class, 'claim_id');
    }

}
