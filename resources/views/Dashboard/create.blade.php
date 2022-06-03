@extends('Dashboard.main')

@section('content')
<h3>Tambah Film</h3>
<hr>
<div class="container mt-5" style="width: 75%;">
    <form class="mb-4" id="form_create" action="/hasilcreate" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nama Judul</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control disabled" name="slug">
        </div>
        <div class="form-group">
            <label for="">Sutradara</label>
            <input type="text" class="form-control" name="sutradara">
        </div>
        <div class="form-group">
            <label for="">Bintang Film</label>
            <input type="text" class="form-control" name="bintangFilm">
        </div>
        <div class="form-group">
          <label for="">Rating</label>
          <input type="text" class="form-control" name="rating">
        </div>
        <div class="form-group">
          <label for="">Durasi</label>
          <input type="text" class="form-control" name="durasi">
        </div>
        <div class="form-group">
          <label for="">Sinopsis</label>
          <textarea name="sinopsis" id="form_create" style="width: 100%; height: 12rem"></textarea>
        </div>
        <div class="form-group">
          <label for="">Kategori</label>
          <select class="form-control" name="kategori_id">
            <option value="1">Movie</option>
            <option value="2">Anime</option>
          </select>
        </div>
        <div class="form-group dashboardcode-bsmultiselect">
          <label for="">Genre</label>
          <select class="form-select" name="genre_id[]" multiple>
            <option class="bg-warning">Sambil Tekan Ctrl Untuk Memilih Banyak Genre</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
            @endforeach
          </select> 
        </div>
        <div class="form-group">
          <label for="">Poster</label>
          <input type="text" placeholder="masukkan link gambar" class="form-control" name="poster">
        </div>
        <div class="form-group">
          <label for="">Video</label>
          <input type="text" placeholder="masukkan link video" class="form-control" name="video">
        </div>
        
        <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection