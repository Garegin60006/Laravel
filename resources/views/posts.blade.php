<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>posts</h2>

@foreach ($posts as $post)
    <h4>{{ $post->title }}</h4>
    <p>{{ optional($post->user)->name }}</p>
@endforeach



</body>
</html>
