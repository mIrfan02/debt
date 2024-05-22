<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Bank extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bank_name',
        'branch_name',
        'bank_code',
        'address',
        'account_name',
        'account_number',
        'city',
        'state',
        'zip',
        'department',
        'country',
        'contact',
        'phone',
        'position',
        'fax',
        'cell',
        'email',
        'other',
        'remarks',

    ];

    public function bankable(): MorphTo
    {
        return $this->morphTo();
    }
}
