<?php

namespace App\Http\Controllers;

use App\User;
use App\Match;
use App\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();
        return view('match.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $team = Match::findOrFail($id);
        $homeScore = (int)$request->home_score;
        $awayScore = (int)$request->away_score;
        $forecasts = Prediction::where('match_id', $team->id)->get();
        foreach($forecasts as $forecast) {
            if($forecast->home_score == $homeScore && $forecast->away_score == $awayScore) {
                $currentPoint = 5;
                break;
            } elseif($forecast->home_score > $forecast->away_score) {
                $forecastHomeMinus = $forecast->home_score - $forecast->away_score;
                if($homeScore > $awayScore) {
                    $teamHomeMinus = $homeScore - $awayScore;
                } elseif($homeScore < $awayScore) {
                    $teamHomeMinus = $awayScore - $homeScore;
                } else {
                    $teamHomeMinus = 0;
                }
                if($forecastHomeMinus == $teamHomeMinus && $forecast->home_score > $forecast->away_score && $homeScore > $awayScore) {
                    $currentPoint = 3;
                    break;
                } elseif($forecastHomeMinus == $teamHomeMinus && $forecast->home_score < $forecast->away_score && $homeScore < $awayScore) {
                    $currentPoint = 3;
                    break;
                }
                if($forecast->home_score > $forecast->away_score && $homeScore > $awayScore && $forecast->home_score == $homeScore) {
                    $currentPoint = 3;
                    break;
                }
                if($forecast->home_score > $forecast->away_score && $homeScore > $awayScore) {
                    $currentPoint = 2;
                    break;
                }
                if($forecast->home_score == $homeScore || $forecast->away_score == $awayScore) {
                    $currentPoint = 1;
                    break;
                }
            } elseif($forecast->home_score < $forecast->away_score) {
                $forecastHomeMinus = $forecast->away_score - $forecast->home_score;
                if ($homeScore > $awayScore) {
                    $teamHomeMinus = $homeScore - $awayScore;
                } elseif ($homeScore < $awayScore) {
                    $teamHomeMinus = $awayScore - $homeScore;
                } else {
                    $teamHomeMinus = 0;
                }
                if ($forecastHomeMinus == $teamHomeMinus && $forecast->home_score > $forecast->away_score && $homeScore > $awayScore) {
                    $currentPoint = 3;
                    break;
                } elseif ($forecastHomeMinus == $teamHomeMinus && $forecast->home_score < $forecast->away_score && $homeScore < $awayScore) {
                    $currentPoint = 3;
                    break;
                }
                if($forecast->home_score < $forecast->away_score && $homeScore < $awayScore && $forecast->away_score == $awayScore) {
                    $currentPoint = 3;
                    break;
                }
                if($forecast->home_score < $forecast->away_score && $homeScore < $awayScore) {
                    $currentPoint = 2;
                    break;
                }
                if($forecast->home_score == $homeScore || $forecast->away_score == $awayScore) {
                    $currentPoint = 1;
                    break;
                }
            } elseif($forecast->home_score == $forecast->away_score && $homeScore == $awayScore) {
                $currentPoint = 3;
                break;
            } else {
                $currentPoint = 0;
            }
        }
        $forecast->update(['points' => $currentPoint]);

        $user = Auth::user();

        $userModel = User::where('id', $user->id)->first();
        $userPoints = $userModel->points;

        $globalPoints = $userPoints + $currentPoint;
        $userModel->update(['points' => $globalPoints]);

        $team->update($request->all());
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
