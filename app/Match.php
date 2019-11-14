<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'home_score', 'away_score', 'finished'
    ];

    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }
}
