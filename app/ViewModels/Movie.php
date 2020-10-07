<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class Movie extends ViewModel
{
    public $movies;
    public $genres;
    public $now_playing_movies;

    public function __construct($movies, $genres, $now_playing_movies)
    {
        $this->movies = $movies;
        $this->genres = $genres;
        $this->now_playing_movies = $now_playing_movies;
    }


    public function movies(){
        return collect($this->movies)->map(function($movie){
            return collect($movie)->merge([
                'poster'=> 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
            ])->dump();
        });
    }
}
