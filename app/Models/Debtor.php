<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Debtor extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'client_id',
        'name',
        'dob',
        'ssn',
        'position',
        'company',
        'driver_license1',
        'organization',
        'driver_license2',
        'email',
        'phone',
        'fax',
        'alias1',
        'cell',
        'other',
        'alias2',
        'remarks',
        'status',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    // One-to-Many relationship with Employment
    public function employments(): HasMany
    {
        return $this->hasMany(Employement::class);
    }

    // Polymorphic relationship with Address
    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    // Polymorphic relationship with Bank
    public function banks(): MorphMany
    {
        return $this->morphMany(Bank::class, 'bankable');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function new_notes()
    {
        return $this->hasMany(Note::class, 'notable_id', 'id');
    }

    public function tickler()
    {
        return $this->hasMany(Tickler::class,);
    }

    public function contacts_new()
    {
        return $this->hasMany(Contact::class, 'contactable_id', 'id');
    }

    public function new_addresses()
    {
        return $this->hasMany(Address::class, 'addressable_id', 'id');
    }

    public function new_bank()
    {
        return $this->hasMany(Bank::class, 'bankable_id', 'id');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }

    public function client()

    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function agreement()

    {
        return $this->hasOne(Agreement::class);
    }

    public function agreement_stage()

    {
        return $this->hasOne(agreementstage::class);
    }

    public function placement()
    {
        return $this->hasOne(Placement::class, 'debtor_id');
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }
}
