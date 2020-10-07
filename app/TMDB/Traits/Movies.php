<?php
namespace App\TMDB\Traits;
use Illuminate\Support\Facades\Http;


trait Movies{
    public static function movies(){
        return self::get('movie/popular')['results'];
    }

    public static function now_playing(){
        return self::get('movie/now_playing')['results'];
    }

    public static function movie($id){
        return self::find_appended('movie/', $id);
    }

    public static function genres(){
        $genresArray = self::get('genre/movie/list')['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre){
            return [$genre['id']=>$genre['name']];
        });

        return $genres;
    }
}