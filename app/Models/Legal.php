<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'plaintiff',
        'defendant',
        'chapter',
        'case_number',
        'location',
        'closed_date',
        'converted_date',
        'date_341',
        're_affirmation_amount',
        're_affirmation_date',
        'arrangement_amount',
        'probate_case_number',
        'date_of_death',
        'court_name',
        'county',
        'state',
        'date_filed',
        'date_expires',
        'remarks',
        'claim_id'
    ];
    protected $casts = [
        'plaintiff' => 'array',
        'defendant' => 'array',
    ];


    public function claim()
    {
        return $this->belongsTo(Claim::class, 'claim_id');
    }

}
