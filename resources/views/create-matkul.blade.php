@extends('master.main')

@section('title')
    <title>Create User Form</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mata-kuliah">Mata Kuliah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User</li>
        </ol>
    </nav>
    <h3>Tambah User</h3>

    <form action="/store-mata-kuliah" method="POST">
        @csrf
        <div class="mb-3">
            <label for="matkul" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" id="matkul" aria-describedby="matkulHelp" name="matkul">
            <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-large btn-primary">Submit</button>
    </form>
@endsection
