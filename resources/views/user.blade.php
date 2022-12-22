<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>users page</h2>

    <div>
        @if(count($users))

        <ul>
            @foreach ($users as $user)
            <li>
                <h4>{{ $user }}</h4>
                @foreach ($user->addresses as $address)
                    <p style="color: red;">{{ $address->country }}</p>
                @endforeach
            </li>
            @endforeach
        </ul>
        @else
        <h3>users don't found</h3>
        @endif
    </div>

<hr>
<hr>
<hr>
<hr>

<div>
    @foreach ($users as $user)
        <h2>Posts</h2>
            <h3>{{ $user->name }}</h3>
        @foreach ($user->posts as $post)
                <h4>{{ $post->title }}</h4>
        @endforeach
    @endforeach
</div>



</body>

</html>
