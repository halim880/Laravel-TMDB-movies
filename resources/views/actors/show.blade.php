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
                <img src="{{$actor['image']}}" alt="" class="responsive-img">
                
            </div>
            <div class="col s12 m7" style="margin-left: 30px;">
                <div>
                    <h4 class="white-text" style="line-height: 20px">{{$actor['name']}}</h4>
                    {{-- <div style="display:flex;  align-items:center;">
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
                    </div> --}}
                </div>
                <div style="margin: 2px;font-size:13px; color:lightgrey;display:flex;  align-items:center">
                    <i class="material-icons orange-text" style="margin: 2px">star</i>
                    <span>{{$actor['birth_date']}} ({{$actor['age']}} years) {{$actor['place_of_birth']}}</span>
                </div>
                <p class ="grey-text text-lighten-2" style="font-size: 14px;"> 
                    {{$actor['biography']}}
                </p>
                <div class="row">
                    <h4 class="white-text">Known for</h4>
                    <div class="col m3 s6 card blue-grey darken-2">
                        <img src="{{$actor['image']}}" alt="" class="responsive-img" style="height: 150px !important; width: 100% !important;">
                        <p style="color:lightgrey;">Avengers</p>
                    </div>
                    <div class="col m3 s6 card blue-grey darken-2">
                        <img src="{{$actor['image']}}" alt="" class="responsive-img" style="height: 150px !important; width: 100% !important;">
                        <p style="color:lightgrey;">Avengers</p>
                    </div>
                    <div class="col m3 s6 card blue-grey darken-2">
                        <img src="{{$actor['image']}}" alt="" class="responsive-img" style="height: 150px !important; width: 100% !important;">
                        <p style="color:lightgrey;">Avengers</p>
                    </div>
                    <div class="col m3 s6 card blue-grey darken-2">
                        <img src="{{$actor['image']}}" alt="" class="responsive-img" style="height: 150px !important; width: 100% !important;">
                        <p style="color:lightgrey;">Avengers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection