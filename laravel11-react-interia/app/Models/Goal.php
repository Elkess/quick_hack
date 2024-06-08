<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'priority',
        'description',
        'party_id',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
