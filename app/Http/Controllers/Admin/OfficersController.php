<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use App\Officer;
use App\Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class OfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::with('user')->get();

        return view('admin.officers.index', compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stations = Station::all(['id', 'name']);

        return view('admin.officers.create', compact('stations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'national_identification_number' => ['required'],
            'station_id' => ['required'],
            'ocs' => [],
            'officer_number' => ['required'],
        ]);

        $role = Role::firstOrCreate([
            'title' => 'officer',
            'description' => 'With this, you.ve got some real power on the site, though not that powerful'
        ]);

        $user = User::create(array_merge($data, [
            'password' => Hash::make('password'),
            'role_id' => $role->id
        ]));

        $user->officer()->create(array_merge($data, [
            'creator_id' => $request->user()->id,
        ]));

        return redirect()->route('admin.officers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $officer)
    {
        //
    }
}
