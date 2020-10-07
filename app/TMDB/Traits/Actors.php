<?php
namespace App\TMDB\Traits;

trait Actors{
    public static function actors(){
        $actorsArray = self::get('person/popular')['results'];

        return collect($actorsArray)->map(function($actor){
            return collect($actor)->merge([
                'image'=> 'https://image.tmdb.org/t/p/w500'.$actor['profile_path'],
                'known_for'=>collect($actor['known_for'])->pluck('title')->implode(','),
            ])->only('id', 'name', 'image', 'known_for');
        });
    }

    public static function actor($id){
        $act = self::get('person/'.$id);

        return $actor = [
            'name'=> $act['name'],
            'image'=>'https://image.tmdb.org/t/p/w500'.$act['profile_path'],
            'biography' => $act['biography'],
            'birth_date' => \Carbon\Carbon::parse($act['birthday'])->format('M d, Y'),
            'age' => \Carbon\Carbon::parse($act['birthday'])->age,
             'place_of_birth'=> $act['place_of_birth'],

        ];
    }
}