@extends('Layouts.main')

@section('Content')
<div class="container bg-dark my-2 rounded-1 border-start border-primary border-5">
    <h4 class="text-white text-capitalize p-2">{{ $film->judul }}</h4>
  </div>
  <div class="container my-2 justify-content-center">
    <center><iframe width="100%" height="500" src="{{ $film->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
      {{-- <center><iframe width="100%" height="360" src="{{ $film->video }}" frameborder="0" scrolling="0" allowfullscreen></iframe></center> --}}
  </div>
  <div class="container bg-dark mb-lg-5">
      <div class="border-bottom">
          <h4 class="text-white text-capitalize p-2">{{ $film->judul }}</h4>
      </div>
      <div class="row p-2 text-white">
        <div class="col-3"><figure><img src="{{ $film->poster }}" class="img-thumbnail" alt="{{ $film->judul }}"></figure></div>
        <div class="col-8 offset-1">
          <table class="table text-white">
            <tbody>
              <tr>
                <td style="width: 20%">Judul</td>
                <td>:  {{ $film->judul }}</td>
              </tr>
              <tr>
                <td style="width: 20%">Kategori</td>
                <td>:  {{ $film->kategori->nama }}</td>
              </tr>
              <tr>
                <td style="width: 20%">Genre</td>
                <td>: @foreach ($film->genre as $genre)
                  <a href="/Genre/{{ $genre->nama }}">{{ $genre->nama}}</a>&nbsp;
              @endforeach
                </td>
              </tr>
              <tr>
                <td style="width: 20%">Sutradara</td>
                <td>:  {{ $film->sutradara }}</td>
              </tr>
              <tr>
                <td style="width: 20%">Bintang Film</td>
                <td>:  {{ $film->bintangFilm }}</td>
              </tr>
              <tr>
                <td style="width: 20%">Rating</td>
                <td>:  {{ $film->rating }}</td>
              </tr>
              <tr>
                <td style="width: 20%">Durasi</td>
                <td>:  {{ $film->durasi }}</td>
              </tr>
            </tbody>
          </table>
          {{-- <div class="row">
            <div class="col-lg-2 border-bottom">
              <h4>Sutradara</h4>
            </div>
            <div class="col-lg-9 offset-1 border-bottom">
              <h4>:{{ $film->sutradara }}</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <h4>Bintang Film</h4>
            </div>
            <div class="col-lg-9 offset-1">
              <h4>:{{ $film->bintangFilm }}</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <h4>Genre</h4>
            </div>
            <div class="col-lg-9 offset-1">
              <h4>:-</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <h4>Rating</h4>
            </div>
            <div class="col-lg-9 offset-1">
              <h4>:{{ $film->rating }}</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <h4>Durasi</h4>
            </div>
            <div class="col-lg-9 offset-1">
              <h4>:{{ $film->durasi }}</h4>
            </div>
          </div> --}}
          <div class="row">
            <div class="bg-light text-black shadow rounded-2 overflow-auto p-lg-2" style="height: 150px;">
              <h4>Sinopsis</h4>
              <p>{{ $film->sinopsis }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection