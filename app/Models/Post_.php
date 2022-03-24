<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi Pranoto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laborum explicabo veniam nemo omnis expedita saepe esse iure incidunt facilis consequatur asperiores illo libero vitae tempora voluptatum est modi minima perferendis repellat dignissimos, facere voluptatem consectetur. Doloremque hic inventore aspernatur doloribus aliquam sequi quos excepturi nihil officiis quasi. Voluptates, quas possimus. Voluptatem, voluptates dignissimos facere nisi quis laudantium ipsum totam dolores nostrum atque vel id ut tempore maxime, delectus maiores voluptate odio quas debitis qui. Perferendis magnam ipsum necessitatibus ipsam beatae, neque reprehenderit culpa, similique enim sit cum nihil repellat placeat blanditiis fuga eos amet? Laudantium tempore nisi fugit eligendi."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "faizol",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laborum explicabo veniam nemo omnis expedita saepe esse iure incidunt facilis consequatur asperiores illo libero vitae tempora voluptatum est modi minima perferendis repellat dignissimos, facere voluptatem consectetur. Doloremque hic inventore aspernatur doloribus aliquam sequi quos excepturi nihil officiis quasi. Voluptates, quas possimus. Voluptatem, voluptates dignissimos facere nisi quis laudantium ipsum totam dolores nostrum atque vel id ut tempore maxime, delectus maiores voluptate odio quas debitis qui. Perferendis magnam ipsum necessitatibus ipsam beatae, neque reprehenderit culpa, similique enim sit cum nihil repellat placeat blanditiis fuga eos amet? Laudantium tempore nisi fugit eligendi."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
