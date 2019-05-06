<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Blog Posts</title>
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        <ul>
            {{--
            @foreach ($posts as $post)
                <li><a href="">{{ $post->title }}</a></li>
            @endforeach
             --}}
             @forelse ($posts as $post)
             <li><a href="">{{ $post->title }}</a></li>
             @empty
             <li>No posts yet</li>
             @endforelse
        </ul>
    </div>
</body>
</html>