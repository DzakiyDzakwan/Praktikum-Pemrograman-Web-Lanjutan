@extends('master.main')

@section('title')
    <title>Enrollment</title>
@endsection

@section('content')
    <div class="d-flex items-center justify-content-between">
        <h3>Enrollment Table</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Mata_Kuliah</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($enrollments as $item)
                @foreach ($item->enrollment()->get() as $user)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $item->username }}</td>
                        <td scope="row">{{ $user->nama }}</td>
                        <td>
                            
                            <a href="/edit-user/{{ $user->id }}">
                                <button class="btn btn-sm btn-warning"> Edit </button>
                            </a>
                        </td>
                        <td>
                           
                            <form action="/delete-user/{{ $user->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"> Hapus </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach --}}

            @foreach ($enrollments as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $item->username }}</td>
                    <td scope="row">{{ $item->nama }}</td>
                    <td>

                        <a href="/edit-user/{{ $item->id }}">
                            <button class="btn btn-sm btn-warning"> Edit </button>
                        </a>
                    </td>
                    <td>

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

    {{ $enrollments->links() }}

    <div class="d-flex justify-content-end">
        <a href="/create-mata-kuliah">
            <button class="btn btn-sm btn-primary">Tambah Mata Kuliah</button>
        </a>
    </div>
@endsection
