<?php

namespace App\Http\Controllers;

use App\User;
use App\TipGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipGroups = TipGroup::all();
        return view('tip-group.index', compact('tipGroups'));
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
     * @param  \App\TipGroup  $tipGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TipGroup $tipGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipGroup  $tipGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(TipGroup $tipGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipGroup  $tipGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipGroup $tipGroup)
    {
        $user = User::where('id', Auth::id())->first();
        $tipGroup = $request->all();
        $tipGroupId = (int) $tipGroup['tip_group_id'];

        if ($tipGroupId == 0) {
            $user->update(['tip_group_id' => 0]);
        } else {
            $user->update(['tip_group_id' => $tipGroupId]);
        }

        return redirect()->back()->with('success', 'You are Joined');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipGroup  $tipGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipGroup $tipGroup)
    {

    }
}
