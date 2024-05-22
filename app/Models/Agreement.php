<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'agreements';

    protected $fillable = [
        'debtor_id',
        'status',
        'type',
        'reason',
        'authority',
        'amount',
        'interest_rate',
        'interest_amount',
        'total_to_pay',
        'agreement_date',
        'interest_from',
        'last_pay',
        'next_pay',
        'remarks',
    ];

    public function debtors()

    {
        return $this->belongsTo(Debtor::class, 'debtor_id','id');
    }

    public function stage_agreement()

    {
        return $this->hasOne(AgreementStage::class);
    }
    

}
