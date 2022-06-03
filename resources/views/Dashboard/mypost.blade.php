@extends('Dashboard.main')

@section('content')
    <h2 class="mb-2">My Post</h2>
    <hr>
    <table class="table table-success table-striped">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Poster</th>
            <th>Kategori</th>
            <th>Genre</th>
            <th>Operator</th>
        </thead>
        <tbody>
            @foreach ($show as $tampil)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tampil->judul }}</td>
                <td><img src="{{ $tampil->poster }}" alt="{{ $tampil->judul }}"></td>
                <td>{{ $tampil->kategori->nama }}</td>
                <td>@foreach ($tampil->genre as $genre)
                    <p>{{ $genre->nama}}</p>
                @endforeach</td>
                <td>
                    <a href="/edit/{{ $tampil->id }}" class="btn btn-success">Edit</a>
                    <form action="/delete/{{ $tampil->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection