<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    protected $fillable = [
        'user_id', 'match_id', 'home_score', 'away_score', 'points', 'finished'
    ];

    public function match()
    {
        return $this->belongsTo(Match::class);
    }
}
