<?php

use App\Match;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $match = new Match();
        $match->id = 1;
        $match->home_team = 'HC Davos';
        $match->away_team = 'EV Zug';
        $match->home_score = 2;
        $match->away_score = 4;
        $match->finished = false;
        $match->save();
    }
}
