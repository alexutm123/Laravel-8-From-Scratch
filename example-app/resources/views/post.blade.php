<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../app.css">

    <title>Document</title>
</head>
<body>
<article>
<h1>{!!$post->title!!}</h1>
<a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
<div>
    {!!$post->body;!!}
</div>
   </article>
   <a href="/">Go back</a>
</body>
</html>