<?php

namespace App\Http\Controllers;

use App\Match;
use App\Prediction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        // $id = 12;
        $userId = Auth::id();
        $predictions = Prediction::where('user_id', $userId)->get();
        $matches = Match::all();
        $matchesByMonth = Match::whereMonth('date_play', $id)->get();
        $matchesArray = array();
        $curentDateTime = Carbon::now();

        if ($id == null) {
            foreach($matches as $match) {
               if(!$predictions->contains('match_id', $match->id) && $match->date_play >= $curentDateTime) {
                    $matchesArray[] = $match;
               }
            }
        } else {
            foreach($matchesByMonth as $match) {
                if(!$predictions->contains('match_id', $match->id) && $match->date_play >= $curentDateTime) {
                    $matchesArray[] = $match;
                }
            }
        }

        return view('prediction.index', compact('matchesArray'));
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

        $input = $request->all();
        $user = Auth::user();
        $currentDateTime = Carbon::now();
        $match = Match::where('id', $input['match_id'])->first();
        if ($match->date_play >= $currentDateTime) {
            $user->prediction()->create($input);
        } else {
            return redirect()->back()->with('error', 'Match ' . $match->home_team . ' - ' . $match->away_team . ' has already started');
        }
        return redirect()->back();
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
        //
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
