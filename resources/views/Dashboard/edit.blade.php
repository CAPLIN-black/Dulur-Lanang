@extends('Dashboard.main')

@section('content')
<h3>Dashboard Edit Film</h3>
<hr>
<div class="container mt-5" style="width: 75%;">
    <form class="mb-4" id='form_update'action="/update/{{ $edit->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Nama Judul</label>
            <input type="text" value="{{ $edit->judul}}" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" value="{{ $edit->slug }}" class="form-control disabled" name="slug">
        </div>
        <div class="form-group">
            <label for="">Sutradara</label>
            <input type="text" value="{{ $edit->sutradara }}" class="form-control" name="sutradara">
        </div>
        <div class="form-group">
            <label for="">Bintang Film</label>
            <input type="text" value="{{ $edit->bintangFilm }}" class="form-control" name="bintangFilm">
        </div>
        <div class="form-group">
          <label for="">Rating</label>
          <input type="text" value="{{ $edit->rating }}" class="form-control" name="rating">
        </div>
        <div class="form-group">
          <label for="">Durasi</label>
          <input type="text" value="{{ $edit->durasi }}" class="form-control" name="durasi">
        </div>
        <div class="form-group">
          <label for="">Sinopsis</label>
          <textarea name="sinopsis" id="form_update" style="width: 100%; height: 12rem">{{ $edit->sinopsis }}</textarea>
        </div>
        <div class="form-group">
          <label for="">Kategori</label>
          <select class="form-control" value="{{ $edit->kategori_id }}" name="kategori_id">
            <option value="1">Movie</option>
            <option value="2">Anime</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Poster</label>
          <input type="text" value="{{ $edit->poster }}" placeholder="masukkan link gambar" class="form-control" name="poster">
        </div>
        <div class="form-group">
          <label for="">Video</label>
          <input type="text" value="{{ $edit->video }}" placeholder="masukkan link video" class="form-control" name="video">
        </div>
        <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection