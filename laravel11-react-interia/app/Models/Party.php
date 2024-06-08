<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'date_debut',
        'date_fin',
        'description',
        'name',
        'candidate_id',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}
