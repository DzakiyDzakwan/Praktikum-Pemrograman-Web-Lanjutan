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
            <tr>
                <th scope="row">1</th>
                <td>User1</td>
                <td>user1@gmail.com</td>
                <td>Pria</td>
                <td>Mahasiswa</td>
                <td>
                    <button class="btn btn-sm btn-warning"> Edit </button>
                    <button class="btn btn-sm btn-danger"> Hapus </button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>User2</td>
                <td>user2@gmail.com</td>
                <td>Wanita</td>
                <td>Mahasiswa</td>
                <td>
                    <button class="btn btn-sm btn-warning"> Edit </button>
                    <button class="btn btn-sm btn-danger"> Hapus </button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>User3</td>
                <td>user3@gmail.com</td>
                <td>Pria</td>
                <td>Mahasiswa</td>
                <td>
                    <button class="btn btn-sm btn-warning"> Edit </button>
                    <button class="btn btn-sm btn-danger"> Hapus </button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="/create-user">
            <button class="btn btn-sm btn-primary">Tambah User</button>
        </a>
    </div>
@endsection
