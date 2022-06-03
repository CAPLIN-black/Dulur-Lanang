@extends('Dashboard.main')

@section('content')
    <h1>Selamat Datang  {{ auth()->user()->name }} di Dashboard</h1>
    <hr>
    <center>
        <img src="{{ asset("admin.jpg") }}" alt="Admin" style="width: 50%;">
    </center>
@endsection