<?php

use App\Prediction;
use Illuminate\Database\Seeder;

class PredictionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prediction = new Prediction();
        $prediction->id = 1;
        $prediction->user_id = 2;
        $prediction->match_id = 1;
        $prediction->home_score = 3;
        $prediction->away_score = 2;
        $prediction->points = 0;
        $prediction->save();
    }
}
