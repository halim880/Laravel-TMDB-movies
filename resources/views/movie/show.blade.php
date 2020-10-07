@extends('layouts.main')

<style scoped>
  .container{
    width: 75% !important;
  }
  .movie-poster:hover{
    opacity: 0.7;
  }
  .card-panel{
    padding: 10px !important;
  }
  .movie-details{
      margin-top: 50px !important;
  }
  .movie-details img{
    height: 450px !important;
    margin-top: 20px !important;
  }
</style>

@section('content')
    <div class="container">
        <div class="row movie-details card-panel blue-grey darken-3">
            <div class="col s12 m4">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="" class="responsive-img">
            </div>
            <div class="col s12 m7" style="margin-left: 30px;">
                <div>
                    <h4 class="white-text" style="line-height: 20px">{{$movie['title']}}</h4>
                    <div style="display:flex;  align-items:center;">
                        <i class="material-icons orange-text" style="margin: 2px">star</i>
                        <span class="white-text" style="margin: 2px">85%</span>
                        <span class="white-text" style="margin: 2px">|</span>
                        <span class="white-text" style="margin: 2px;font-size:12px;">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        <span class="white-text" style="margin: 2px">|</span>
                        <div style="margin: 2px;font-size:13px; color:lightgrey">
                            @foreach ($movie['genres'][0] as $genre)
                                <span>{{$genres->get($genre)}} </span> @if(!$loop->last) , &nbsp; @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <p class ="grey-text text-lighten-2" style="font-size: 14px;"> 
                    {{$movie['overview']}}
                </p>
                <div>
                    <p class="grey-text text-lighten-2" style="font-size:16px">Featured crew</p>
                    <div style="display: flex; width: 400px">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index<2)
                                <div style="width: 200px; color:lightgrey">
                                    <div>{{$crew['name']}}</div>
                                    <div style="font-size: 12px;">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @if ($movie['videos']['results']>0)
                <a href="https:/youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="btn btn-large waves-effect waves-red orange darken-2" style="margin-top:20px;">
                    <i class="material-icons left">play_circle_outline</i>
                    play tailer
                </a>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="row card-panel blue-grey darken-3 grey-text text-lighten-2">
            <h4>Cast</h4>
            @foreach ($movie['credits']['cast'] as $cast)
                @if ($loop->index <8)
                <div class="col l3 m4 s6">
                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="" class="responsive-img" style="height: 250px">
                    <p style="line-height: 10px; font-size:15px;">{{$cast['name']}}</p>
                    <p style="line-height: 10px; font-size:13px;">as {{$cast['character']}}</p>
                </div>
                @endif
            @endforeach
            
        </div>
    </div>

    <div class="container">
        
        <div class="row card-panel blue-grey darken-3 grey-text text-lighten-2">
            <h4>Images</h4>
            @foreach ($movie['images']['backdrops'] as $image)
                @if ($loop->index <8)
                <div class="col l4 m4 s6">
                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" alt="" class="responsive-img" style="height: 250px">
                </div>
                @endif
            @endforeach
            
        </div>
    </div>
@endsection