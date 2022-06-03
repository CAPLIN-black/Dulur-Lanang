@extends('Dashboard.main')

@section('content')
    <h3 class="mb-2">Feedback</h3>
    <hr>
    <table class="table table-success table-striped">
        <thead>
            <th>No</th>
            <th>Pesan Masuk</th>
        </thead>
        <tbody>
            @foreach ($feedback as $pesan)
            <tr>
                <td>{{ $pesan->id }}</td>
                <td>{{ $pesan->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection