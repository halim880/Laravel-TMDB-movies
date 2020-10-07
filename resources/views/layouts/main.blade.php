<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="blue-grey darken-4">
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <ul class="left hide-on-med-and-down">
        <li><a href="{{route('movies.index')}}"><i class="left material-icons">live_tv</i> Movies</a></li>
        <li><a href="{{route('tv.index')}}">TV Shows</a></li>
        <li><a href="{{route('actors.index')}}">Actors</a></li>
      </ul>


      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  @yield('content')

   
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script src="{{asset('materialize/js/init.js')}}"></script>

  </body>
</html>
