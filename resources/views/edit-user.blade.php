@extends('master.main')

@section('title')
    <title>Edit User Form</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>
    <h3>Ubah User</h3>

    <form action="/update-user" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="user_id" value="{{ $user[0]->id }}">

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username"
                value="{{ $user[0]->username }}">
            <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                value="{{ $user[0]->email }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $user[0]->password }}">
            <div id="passwordHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" aria-label="Default select example" name="jk">
                <option value="LK">Pria</option>
                <option value="PR">Wanita</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="role">Role</label>
            <select class="form-select" id="role" aria-label="Default select example" name="role">
                <option value="mahasiswa">Mahasiswa</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-large btn-primary">Submit</button>
    </form>
@endsection
