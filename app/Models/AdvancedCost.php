<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedCost extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'advanced_costs'; // Replace 'advanced_costs' with the actual table name

    protected $fillable = [
        'category',
        'debtor_claim_number',
        'client_name',
        'cost_type',
        'cost_date',
        'effective_date',
        'cost_amount',
        'cost_method',
        'check_no',
        'advanced_by',
        'charged_to',
        'remarks',
        'claim_id',
    ];
}
