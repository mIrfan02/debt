<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, HasUuids;



    protected $fillable = [
        'payment_method',
        'amount',
        'comment',
        'date_paid',
        'category',
        'debtor_claim_number',
        'client_name',
        'payment_type',
        'paid_by',
        'paid_to',
        'final_payment',
        'claim_id',
    ];






    public function claim()
    {
        return $this->belongsTo(Claim::class);
    }
}
