<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserEnrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index() {
        /* $enrollments = UserEnrollment::get(); */

        $enrollments = UserEnrollment::join('users', 'users.id', '=', 'user_enrollments.user_id' )->join('matakuliahs', 'matakuliahs.id', '=', 'user_enrollments.mata_kuliah_id')->paginate(3);

    /* $enrollments = User::all(); */

        return view('enrollment', compact('enrollments'));
    }
}
