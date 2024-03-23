<?php

use App\Models\Category;
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


Route::get('posts/{post:slug}', function (Post $post) {
    

    return view('post',['post'=> $post
]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    
 
    return view('posts',['posts'=> $category->posts
]);
});
