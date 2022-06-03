@extends('Layouts.main')

@section('Content')
<div class="container bg-dark my-2 rounded-1 border-start border-primary border-5">
    <h4 class="text-white text-capitalize p-2">{{ $kategori -> nama }}</h4>
  </div>
  <div class="container mt-2 ">
    <div class="d-flex flex-wrap justify-content-center">
      @foreach ($films as $film)
      <div class="card mx-2 my-2" style="width: 200px;">
        <img src="{{ $film->poster }}" class="card-img-top" height="280px" alt="{{ $film->judul }}">
        <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title text-center">{{ $film->judul }}</h5>
            <div class="text-center mt-auto">
                @foreach ($film->genre as $genre)
                    <a href="/Genre/{{ $genre->nama }}">{{ $genre->nama}}</a>&nbsp;
                @endforeach
            </div>
            <a href="/nonton/{{ $film->slug }}" class="btn btn-primary mt-auto">Nonton</a>
        </div>
    </div>
      @endforeach
    </div>
  </div>
@endsection