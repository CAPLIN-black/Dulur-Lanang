@extends('Dashboard.main')

@section('content')
    <h3 class="mb-2">Data Login Admin</h3>
    <hr>
    <a href="/register" class="mb-3">
        <button class="btn btn-primary">Register Admin</button>
    </a>
    <hr>
    <table class="table table-success table-striped">
        <thead>
            <th>No</th>
            <th>Nama admin</th>
            <th>Email</th>
        </thead>

        <tbody>
            @foreach ($user as $users)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection