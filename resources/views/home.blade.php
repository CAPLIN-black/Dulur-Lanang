@extends('Layouts.main')

@section('Content')
<div class="container my-2">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <a href="/page"><img src="{{ asset('1.jpg') }}" class="d-block w-100 img-fluid rounded-3" alt="Doctor Strange"></a>
          <div class="carousel-caption d-none d-sm-block">
              <h3>Doctor Strange: Multiverse Of Madness</h3>
          </div>
      </div>
      <div class="carousel-item">
          <a href="/sonic2"><img src="{{ asset('2.png') }}" class="d-block w-100 img-fluid rounded-3" alt="Sonic 2"></a>
          <div class="carousel-caption d-none d-sm-block">
              <h3>One Piece : Stempede</h3>
          </div>
      </div>
      <div class="carousel-item">
          <a href="/spiderman"><img src="{{ asset('3.png') }}" class="d-block w-100 img-fluid rounded-3" alt="Spiderman"></a>
          <div class="carousel-caption d-none d-sm-block">
              <h3>Demon Slayer Mugen Train</h3>
          </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
  </div>
</div>
<div class="container bg-dark my-2 rounded-1 border-start border-primary border-5 d-flex">
    <h4 class="text-white text-capitalize p-2 me-auto">Daftar Film</h4>
</div>
<div class="container mt-2">
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
</div>
<div class="container d-flex justify-content-center">
  {{ $films -> links() }}
</div>
@endsection