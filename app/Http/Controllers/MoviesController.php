<?php

namespace App\Http\Controllers;

use App\TMDB\TMDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\Movie;


class MoviesController extends Controller
{    
    public function index(){
        $movies = TMDB::movies();
        $genres = TMDB::genres();
        $now_playing_movies =  TMDB::now_playing();

        $movies_view = new Movie(
            $movies,
            $genres,
            $now_playing_movies
        );

        return view('home', $movies_view);
    }

    public function show($id){
        $movie =  TMDB::movie($id);
        $genres = TMDB::genres();
        return view('movie.show', compact(['movie', 'genres']));
    }
}
