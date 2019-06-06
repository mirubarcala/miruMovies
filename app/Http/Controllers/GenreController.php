<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre; 
use App\Movie;

class GenreController extends Controller
{
    public function index()
    {
        $generos = Genre::all();

        return view('genres')->with('generos', $generos);
    }
    public function show($id)
    {
        // la query seria ésta
        $movies = Movie::where('genre_id', $id)->get();
        $genero = Genre::find($id);
  
        return view('genreMovies')
            ->with('movies', $movies)
            ->with('elGenero', $genero);
    }
}
