<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'claims';

    protected $fillable = [
        'debtor_person',
        'debtor_organization',
        'placement_amount',
        'interest_start_date',
        'pre_judgment_interest',
        'post_judgment_interest',
        'client',
        'creditor',
        'claim_number',
        'status',
        'date_assigned',
        'remarks',
        'portfolio',
        'type_of_debt',
        'collector',
        'method_contingency',
        'debtor_id',
        'client_claim_no',
        'creditor_claim_no',

        'balance_amount',
        'balance_date',

        'date_closed',

        'flags',
        'reference',

        'remaining_principle',
        'remaining_cost',
        'accumulated_interest',

    ];


    public function debtor()
    {
        return $this->belongsTo(Debtor::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'claim_id','id');
    }

    public function costs()
    {
        return $this->hasMany(Cost::class, 'claim_id');
    }

    public function legals()
    {
        return $this->hasMany(Legal::class);
    }

    public function placement()
    {
        return $this->hasOne(Placement::class);
    }

    public function calculateSumOfAmounts()
    {
        if ($this->placement) {
            return $this->placement->placementComponent->sum('amount');
        }

        return 0;
    }
}
