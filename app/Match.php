<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'home_score', 'away_score', 'home_team', 'away_team', 'place', 'date_play', 'match_id'
    ];

    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }
}
