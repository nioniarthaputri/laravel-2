<?php

namespace App\Models;

class Movies
{
    // modifier private agar bisa diakses dari kelas ini saja
    private static $list_movies = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p1.PNG?raw=true"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p2.PNG?raw=true"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p3.PNG?raw=true"
      ],
      [
        "id" => 4,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p4.PNG?raw=true"
      ],
      [
        "id" => 5,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p5.PNG?raw=true"
      ],
      [
        "id" => 6,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p6.PNG?raw=true"
      ],
      [
        "id" => 7,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p7.PNG?raw=true"
      ],
      [
        "id" => 8,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p8.PNG?raw=true"
      ],
      [
        "id" => 9,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p9.PNG?raw=true"
      ],
      [
        "id" => 10,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p10.PNG?raw=true"
      ],
      [
        "id" => 11,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p11.PNG?raw=true"
      ],
      [
        "id" => 12,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p12.PNG?raw=true"
      ]
    ];

    private static $list_movies_trending = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t2.PNG?raw=true"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t3.PNG?raw=true"
      ],
      [
        "id" => 4,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t4.PNG?raw=true"
      ],
      [
        "id" => 5,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t5.PNG?raw=true"
      ],
      [
        "id" => 6,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t6.PNG?raw=true"
      ]
    ];

    private static $list_tvshows = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv1.PNG?raw=true"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv2.PNG?raw=true"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv3.PNG?raw=true"
      ],
      [
        "id" => 4,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv4.PNG?raw=true"
      ],
      [
        "id" => 5,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv5.PNG?raw=true"
      ],
      [
        "id" => 6,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv6.PNG?raw=true"
      ],
      [
        "id" => 7,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv7.PNG?raw=true"
      ],
      [
        "id" => 8,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv8.PNG?raw=true"
      ],
      [
        "id" => 9,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv9.PNG?raw=true"
      ],
      [
        "id" => 10,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv10.PNG?raw=true"
      ],
      [
        "id" => 11,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv11.PNG?raw=true"
      ],
      [
        "id" => 12,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv12.PNG?raw=true"
      ]
    ];

    private static $list_blockbusters = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m1.PNG?raw=true"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m2.PNG?raw=true"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m3.PNG?raw=true"
      ],
      [
        "id" => 4,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m4.PNG?raw=true"
      ],
      [
        "id" => 5,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m5.PNG?raw=true"
      ],
      [
        "id" => 6,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m6.PNG?raw=true"
      ]
    ];

    private static $list_netflix_originals = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o1.PNG?raw=true"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o2.PNG?raw=true"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o3.PNG?raw=true"
      ],
      [
        "id" => 4,
        "title" => "Beetlejuice",
        "slug" => "beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o4.PNG?raw=true"
      ],
      [
        "id" => 5,
        "title" => "The Cotton Club",
        "slug" => "the-cotton-club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o5.PNG?raw=true"
      ],
      [
        "id" => 6,
        "title" => "The Shawshank Redemption",
        "slug" => "the-shawshank-redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o5.PNG?raw=true"
      ]
    ];

    public static function all() 
    {
      return collect(self::$list_movies);
    }

    public static function allTrending() 
    { 
      return collect(self::$list_movies_trending);
    }

    public static function allTvShows() 
    {
      return collect(self::$list_tvshows);
    }

    public static function allBlockbusters() 
    {
      return collect(self::$list_blockbusters);
    }

    public static function allNetflixOriginals() 
    {
      return collect(self::$list_netflix_originals);
    }

    public static function find($slug) 
    { 
        // ======== mencari data berdasarkan slug menggunakan cara foreach ========
        // $movies = self::$list_movies;
        // $movie = [];

        // foreach ($movies as $m) {
        //   if($m['slug'] === $slug) {
        //     $movie = $m;
        //   }
        // }

        // ======== mencari data berdasarkan slug menggunakan collection ========
        $movies = static::all();

        return $movies->firstWhere('slug', $slug);
    }
}
