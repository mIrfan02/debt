<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacementComponent extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'placement_components';

    protected $fillable = [
        'name',
        'amount',
        'rate',
        'date',
        'comments',
        'placement_total',
        'placement_id',
    ];
    public function placement()
    {
        return $this->belongsTo(Placement::class, 'placement_id');
    }
}
