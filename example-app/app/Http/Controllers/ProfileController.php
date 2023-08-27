<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        return view('users.profile.create', ['user' => $user]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user) 
    {
        $_data = $request->validate([
            'phone' => 'required', 'email' => 'required' 
        ]); 

        $profile = Profile::make($request->all()); 
        $profile->user_id = $user->id; 
        $profile->save();
        
        $request->session()->flash('success', 'Profile created successfully'); 
        return redirect()->route('users.index'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
