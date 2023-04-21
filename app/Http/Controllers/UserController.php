<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   

    public function index() {
        $users = User::get();
        return view('home', compact('users'));
    }

    public function create() {
        return view('create-user');
    }

    public function store(Request $request) {

        User::create([
            'username' => $request->username,
            'email' => $request->gmail,
            'password' => $request->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role
        ]);

        return back();
    }

}
