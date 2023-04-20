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
            'username' => 'userseeder1',
            'email' => 'userseeder1@gmail.com',
            'password' => 'userseeder1',
            'jenis_kelamin' => 'LK',
            'role' => 'mahasiswa'
        ]);

        return back();
    }

}
