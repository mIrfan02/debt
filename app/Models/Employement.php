<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employement extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employer',
        'employee_name',
        'address',
        'city',
        'state',
        'zip',
        'pay_amount',
        'pay_period',
        'position',
        'date_last_paid',
        'date_last_commenced',
        'country',
        'phone',
        'fax',
        'cell',
        'other',
        'date_ceased',
        'length_of_service',
        'remarks'
    ];

    public function debtor(): BelongsTo
    {
        return $this->belongsTo(Debtor::class);
    }
}
