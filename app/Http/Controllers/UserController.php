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
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jk,
            'role' => $request->role
        ]);

        return redirect('/');
    }

    public function edit($id) {
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('edit-user', compact('user'));
    }

    public function update(Request $request) {
        User::where('id', $request->user_id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jk,
            'role' => $request->role
        ]);
        return redirect('/');
    }

    public function destroy($id) {
        User::where('id', $id)->delete();
        return back();
    }
}
