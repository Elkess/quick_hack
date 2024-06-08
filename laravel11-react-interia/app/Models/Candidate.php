<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'ispresident',
        'img_url',
        'info',
        'fullname',
    ];

    public function parties()
    {
        return $this->hasMany(Party::class);
    }
}

