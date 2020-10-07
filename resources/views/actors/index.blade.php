


@extends('layouts.main')

<style>
  .container{
    width: 75% !important;
    height: auto !important;
  }
  .movie-poster:hover{
    opacity: 0.7;
  }
  .card-panel{
    padding: 10px !important;
  }

  .movies{
    display: flex;
    flex-wrap: wrap !important;
  }

  .movies .movie{
    width: 200px;
  }
</style>


@section('content')
    <div class="container">
        <div class="popular-movies">
            <h4 class="orange-text">Popular Movies</h4>
            <div class="movies">
            @foreach ($actors as $actor)
                <div class="movie card-panel blue-grey darken-3">
                    <div class="">
                      <a href="{{route('actors.show', $actor['id'])}}" class="movie-poster">
                        <img src="{{$actor['image']}}" alt="" class="responsive-img" style="height: 250px">
                      </a>
                      <div>
                        <div class=""style="margin-top:10px;"><a href="{{route('actors.show', $actor['id'])}}" >{{$actor['name']}}</a></div>
                        <p style="font-size: 14px; color: lightgrey">{{$actor['known_for']}} &nbsp;</p>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection