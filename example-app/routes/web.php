<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
 


    // $posts=array_map(function($file)
    // {
    //     $document=YamlFrontMatter::parseFile($file);

    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->slug,
    //         $document-> body(),
            
    //     );
    // },$files);
   
    

    return view('posts',[
        'posts'=>Post::all()
    ]);
   
});


Route::get('posts/{post}', function ($slug) {
    

    return view('post',['post'=> Post::findOrFail($slug)
]);
});
