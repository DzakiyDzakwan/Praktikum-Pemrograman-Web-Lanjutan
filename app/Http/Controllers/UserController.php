<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $user = User::get();
        //dd($user);
        return view('home', compact('user'));
    }

    public function create() {
        return view('create-user');
    }

    public function store(Request $request) {
        // dd($request->all());
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jk,
            'role' => $request->role
        ]);

        return back();
    }
}
