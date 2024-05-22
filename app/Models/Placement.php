<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'placements';

    protected $fillable = [

        'placement_date',
        'contigency_method',
        'method_rate',
        'interest_start_date',
        'allocation_method',
        'interest_rate',
        'debt_type',
        'sliding_scale',
        'claim_id'

    ];
    protected $casts = [
        // 'sliding_scale' => 'array',
    ];



    public function placementComponent()
    {
        return $this->hasMany(PlacementComponent::class, 'placement_id');
    }

    public function debtor()
    {
        return $this->belongsTo(Debtor::class, 'debtor_id');
    }

    public function claim()
    {
        return $this->belongsTo(Claim::class);
    }
}
