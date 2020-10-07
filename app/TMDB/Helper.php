<?php
namespace App\TMDB;
use Illuminate\Support\Facades\Http;

class Helper{
    public static $url = 'https://api.themoviedb.org/3/';
    public static $token = '?api_key=363f32475685670f96b42c9f8ae14cf6';
    public static $append = '&append_to_response=credits,videos,images';


    public static function get($route){
        return Http::get(self::$url.$route.self::$token)->json();
    }

    public static function find_appended($route, $id){
        return Http::get(self::$url.$route.$id.self::$token.self::$append)->json();
    }
}