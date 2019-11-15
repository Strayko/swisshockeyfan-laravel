<?php

namespace App\Http\Controllers;

use App\User;
use App\TipGroup;
use App\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
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
        $user = User::findOrFail($id == Auth::id());
        $tipGroups = TipGroup::all();
        return view('user.edit', compact('user', 'tipGroups'));
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
        $this->validate($request, [
            'first_name'    => ['required', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'mobile_phone'  => ['required', 'string', 'max:255'],
            'street'        => ['required', 'string', 'max:255'],
            'post_code'     => ['required', 'string', 'max:255'],
            'place'         => ['required', 'string', 'max:255'],
        ]);

        $user = User::findOrFail($id);

        // Update User password
        if ($request['password'] !== null) {
            $this->validate($request, [
                'password' => ['min:8', 'confirmed']
            ]);
            $password = Hash::make($request['password']);
            $user->update(['password' => $password]);
        }

        $user->tip_group_id = isset($request['tip_group']) ? $request['tip_group'] : $user->tip_group_id;
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->mobile_phone = $request['mobile_phone'];
        $user->telephone = $request['telephone'];
        $user->street = $request['street'];
        $user->post_code = $request['post_code'];
        $user->place = $request['place'];

        if ($user->id == Auth::id()) {
            $user->save();
        } else {
            return redirect()->route('user.edit', ['id' => $id])->with('error', 'You don\'t have permission to edit user!');
        }

        return redirect()->route('user.edit', ['id' => $id])->with('success', 'Profile Updated Successfully!');

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

    /**
     * List predictions resources to user profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function predictions($id)
    {
        $userId = User::findOrFail($id);
        $predictions = Prediction::where('user_id', $userId->id)->get();

        return view('user.prediction', compact('predictions'));
    }

    public function rangList()
    {
        $users = User::orderBy('points', 'DESC')->paginate(1);
        $count = 0;
        return view('user.rang-list', compact('users', 'count'));
    }

    public function tipGroupList()
    {
        $count = 0;
        $tipGroups = TipGroup::all();

        foreach($tipGroups as $tipGroup) {
            $usersTipGroup = User::where('tip_group_id', $tipGroup->id)->get();
            $points = 0;
            foreach ($usersTipGroup as $user) {
                $points += $user->points;
            }
            $userPoints[] = array(
                'points' => $points,
                'name' => $tipGroup->name
            );
        }

        if (!empty($userPoints)) {
            arsort($userPoints);
        } else {
            $userPoints = array();
        }

        return view('user.tip-group-list', compact('count', 'userPoints'));
    }

    public function tipGroupUserList()
    {
        $tipGroups = TipGroup::all();
        return view('user.tip-group-user-list', compact('tipGroups'));
    }

    public function tipGroupUsers($id)
    {
        $count = 0;
        $users = User::where('tip_group_id', $id)->get();
        $users = $users->sortByDesc('points');
        return view('user.tip-group-users', compact('users', 'count'));
    }
}
