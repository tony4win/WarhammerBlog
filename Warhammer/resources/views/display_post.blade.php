<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="post_container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/Post_Logo.png') }}" alt="" id="post_image">
        </a>
        <h3 id="post_title">{{$post['title']}}</h3>
        <p>{{$post['body']}}</p>
        <p>Posted by: {{$post->getUser->name}}</p>
    </div>
</body>
</html>