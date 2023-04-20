@extends('master.main')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="d-flex items-center justify-content-between">
        <h3>User Table</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning"> Edit </button>
                        <button class="btn btn-sm btn-danger"> Hapus </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="/create-user">
            <button class="btn btn-sm btn-primary">Tambah User</button>
        </a>
    </div>
@endsection
