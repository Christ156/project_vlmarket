<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = User::latest()->paginate(10);
        return view('profile/index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id){
        $user = User::findOrFail($id);
        $user->status = '0';
        $user->save();

        return redirect('profile');
    }

    public function enable($id){
        $user = User::findOrFail($id);
        $user->status = '1';
        $user->save();

        return redirect('profile');
    }
}
