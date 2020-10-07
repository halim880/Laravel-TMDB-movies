

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

              @foreach ($shows as $show)
                <div class="movie">
                    <div class="card-panel blue-grey darken-3">
                    <a href="{{route('tv.show', $show['id'])}}" class="movie-poster">
                        <img src="{{'https://image.tmdb.org/t/p/w500/'.$show['poster_path']}}" alt="" class="responsive-img" style="height: 250px">
                    </a>
                    <div>
                        <div class=""style="margin-top:10px;"><a href="{{route('tv.show', $show['id'])}}" >{{$show['name']}}</a></div>
                        <div class="" style="display:flex;  align-items:center;">
                        <i class="material-icons orange-text" style="margin: 2px">star</i>
                        {{-- <span class="white-text" style="margin: 2px">{{$movie['vote_average']*10}}%</span> --}}
                        <span class="white-text" style="margin: 2px">|</span>
                        <span class="white-text" style="margin: 2px;font-size:12px;">{{\Carbon\Carbon::parse($show['first_air_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="" style="display:flex;  align-items:center; font-size:12px; color:lightgrey; flex-wrap:wrap;">
                            @foreach ($show['genre_ids'] as $genre)
                                <span>{{$genres->get($genre)}} </span> @if(!$loop->last),&nbsp;@endif
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
{{-- 
    <div class="container">
      <div class="popular-movies">
          <h4 class="orange-text">Now Playing</h4>
          <div class="movies">
            @foreach ($now_playing_movies as $movie)
              <div class="movie">
    <div class="card-panel blue-grey darken-3">
      <a href="{{route('movies.show', $movie['id'])}}" class="movie-poster">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="" class="responsive-img" style="height: 250px">
      </a>
      <div>
        <div class=""style="margin-top:10px;"><a href="{{route('movies.show', $movie['id'])}}" >{{$movie['title']}}</a></div>
        <div class="" style="display:flex;  align-items:center;">
          <i class="material-icons orange-text" style="margin: 2px">star</i>
          <span class="white-text" style="margin: 2px">{{$movie['vote_average']*10}}%</span>
          <span class="white-text" style="margin: 2px">|</span>
          <span class="white-text" style="margin: 2px;font-size:12px;">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="" style="display:flex;  align-items:center; font-size:12px; color:lightgrey; flex-wrap:wrap;">
          @foreach ($movie['genre_ids'] as $genre)
            <span>{{$genres->get($genre)}} </span> @if(!$loop->last),&nbsp;@endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
            @endforeach
          </div>
      </div>
  </div> --}}
@endsection