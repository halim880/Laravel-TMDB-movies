<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TMDB\TMDB;


class TvController extends Controller
{
    public function index(){
        $shows = TMDB::shows();
        $genres = TMDB::genres();
        return view('tv.index', compact(['shows', 'genres']));
        // return $shows;
    }


    public function show($id){

        $show = TMDB::show($id);
        return view('tv.show', compact('show'));
        // return $show;
    }
}