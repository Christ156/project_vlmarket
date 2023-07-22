<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->paginate(10);
        return view('profile/index', compact('user'));
    }
}
