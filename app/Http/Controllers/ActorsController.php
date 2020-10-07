<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TMDB\TMDB;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    public function index(){
        $actors = TMDB::actors();
        return view('actors.index', compact('actors'));
        // return $actors;
    }


    public function show($id){

        $actor = TMDB::actor($id);
        return view('actors.show', compact('actor'));
        // return $actor;
    }
}
