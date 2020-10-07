

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

              @foreach ($movies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
              @endforeach


              

            </div>
        </div>
    </div>

    <div class="container">
      <div class="popular-movies">
          <h4 class="orange-text">Now Playing</h4>
          <div class="movies">
            @foreach ($now_playing_movies as $movie)
              <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
          </div>
      </div>
  </div>
@endsection