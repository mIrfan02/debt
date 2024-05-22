<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickler extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ticklers';

    protected $fillable = [
        'debtor_id',
        'type_id',
        'response',
        'sent_at',
        'receive_at',
        'status'
    ];

    public function debtors()
    {
        return $this->belongsTo(Debtor::class, 'debtor_id', 'id');
    }

    public function tickler_type()
    {
        return $this->belongsTo(TicklerType::class, 'type_id', 'id');
    }
}
