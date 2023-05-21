@extends('master.main')

@section('title')
    <title>Mata-Kuliah</title>
@endsection

@section('content')
    <div class="d-flex items-center justify-content-between">
        <h3>User Table</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matkul as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>
                        {{-- Edit Button --}}
                        <a href="/edit-user/{{ $item->id }}">
                            <button class="btn btn-sm btn-warning"> Edit </button>
                        </a>
                    </td>
                    <td>
                        {{-- Delete Button --}}
                        <form action="/delete-user/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit"> Hapus </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="/create-mata-kuliah">
            <button class="btn btn-sm btn-primary">Tambah Mata Kuliah</button>
        </a>
    </div>
@endsection
