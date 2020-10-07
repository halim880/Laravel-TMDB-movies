<?php

namespace App\TMDB;

use App\TMDB\Traits\Movies;
use App\TMDB\Traits\Actors;
use App\TMDB\Traits\TV;

class TMDB extends Helper
{
    use Movies;
    use Actors;
    use TV;
}
