<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Kategori;
use App\Models\Genre;
use App\Models\Film_Genre;

class FilmController extends Controller
{
    public function home(){
        $films = Film::latest();

        if(request('search')){
            $films -> where('judul', 'like', '%'. request('search'). '%');
        }

        return view('home', [
            "title" => "Home",
            "films" => $films->paginate(10)
        ]);
    }
    public function nonton(Film $film){
        return view('nonton', [
            "title" => "Nonton",
            "film" => $film
        ]);
    }
    public function movies(Kategori $kategori){
        return view('kategori', [
            "title" => "Movies",
            "kategori" => $kategori->find(1),
            "films" => $kategori->find(1)->film
        ]);
    }
    public function animes(Kategori $kategori){
        return view('kategori', [
            "title" => "Anime",
            "kategori" => $kategori->find(2),
            "films" => $kategori->find(2)->film
        ]);
    }
    public function inputfeedback(){
        return view('inputfeedback', [
            'title' => "Feedback"
        ]);
    }
    public function feedback(Request $request){
            Feedback::create(
                [
                    'comment' => $request -> comment 
                ]
            );
            return back();
    }
    public function create(Request $request){
<<<<<<< HEAD

        $create = Film::create($request -> all());
=======
        $create=Film::create(
            [
                'judul'=> $request->judul,
                'kategori_id' => $request->kategori_id,
                'slug' => $request-> slug,
                'poster' => $request-> poster,
                'video' => $request-> video,
                'genre_id[]' => $request-> genre_id,
                'sutradara' => $request-> sutradara,
                'bintangFilm' => $request-> bintangFilm,
                'rating' => $request-> rating,
                'durasi' => $request-> durasi,
                'sinopsis' => $request-> sinopsis
            ]
            );
        // $create = Film::create($request -> all());
>>>>>>> 071adcf73b44cfabdfb782acf4f8f5c183b7c900
        $create-> genre()->attach($request->input('genre_id'));
        
        return back();
    }
    public function show(){
        $show = Film::all();
        return view('dashboard.mypost', compact('show'));
    }
    public function edit($id){
        $edit = Film::where('id', $id)->first();
        return view('Dashboard.edit', compact('edit'), [
            'genres' => Genre::all()
        ]);
    }
    public function update(Request $request, $id){
<<<<<<< HEAD
        $update = Film::where('id', $id)->update([
            
            'judul'=> $request->judul,
            'kategori_id' => $request->kategori_id,
            'slug' => $request-> slug,
            'poster' => $request-> poster,
            'video' => $request-> video,
            'sutradara' => $request-> sutradara,
            'bintangFilm' => $request-> bintangFilm,
            'rating' => $request-> rating,
            'durasi' => $request-> durasi,
            'sinopsis' => $request-> sinopsis
            
        ]);
        
=======
        // Film::where('id', $id)->update([
        //     'judul'=> $request->judul,
        //     'kategori_id' => $request->kategori_id,
        //     'slug' => $request-> slug,
        //     'poster' => $request-> poster,
        //     'video' => $request-> video,
        //     'sutradara' => $request-> sutradara,
        //     'bintangFilm' => $request-> bintangFilm,
        //     'rating' => $request-> rating,
        //     'durasi' => $request-> durasi,
        //     'sinopsis' => $request-> sinopsis
        // ]);
        $update = Film::where('id', $id)->update($request -> except('_token', '_method', 'genre_id'));
>>>>>>> 071adcf73b44cfabdfb782acf4f8f5c183b7c900
        return redirect('/mypost');
    }
    public function delete($id){
        Film::destroy($id);

        return back();
    }
    public function genre(Genre $genre){
        return view('genre', [
            "title" => "Genre",
            "genre" => $genre->nama,
            "films" => $genre->film
        ]);
    }
}