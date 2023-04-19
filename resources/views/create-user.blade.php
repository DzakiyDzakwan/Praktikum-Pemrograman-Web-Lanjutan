@extends('master.main')

@section('title')
    <title>Create User Form</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User</li>
        </ol>
    </nav>
    <h3>Create User Form</h3>
    <form>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="email" class="form-control" id="username" aria-describedby="emailHelp">
            <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
            <div id="passwordHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" aria-label="Default select example">
                <option>Pria</option>
                <option>Wanita</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="role">Role</label>
            <select class="form-select" id="role" aria-label="Default select example">
                <option>Mahasiswa</option>
                <option>Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-large btn-primary">Submit</button>
    </form>
@endsection
