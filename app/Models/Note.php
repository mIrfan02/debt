<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;



    // protected $fillable = ['title', 'note', 'notable_id', 'notable_type'];
    protected $fillable = ['title', 'note', 'notable_id', 'notable_type', 'action', 'note_by', 'note_date', 'reviewed', 'review_by', 'review_date'];

}
