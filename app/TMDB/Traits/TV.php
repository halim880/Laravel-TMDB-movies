<?php
namespace App\TMDB\Traits;
use Illuminate\Support\Facades\Http;

trait TV
{
    public static function shows(){
        $shows = self::get('tv/popular');
        return $shows['results'];
    }

    public static function show($id){
        $show = self::find_appended('tv/',$id);
        return $show;
    }
}
