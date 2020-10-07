


<div class="movie movie card-panel blue-grey darken-3">
    <div>
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