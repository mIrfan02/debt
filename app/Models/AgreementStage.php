<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementStage extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'agreement_stages';

    protected $fillable = [
        'agreement_id',
        'stage',
        'pay_freq',
        'no_of_pay',
        'pay_amount',
        'stage_total',
        'first_pay_date',
        'last_pay_date',
        'remarks'
    ];

    public function agreements()

    {
        return $this->belongsTo(Agreement::class, 'agreement_id','id');
    }
   
}
