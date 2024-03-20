<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <head>
        <div class = "header-container">
            <h1>Warhammer Blog</h1></br>
            <p class="header_paragraph">In the grim darkness of the far future there is only war</p>
        </div>
    </head>
    <div class="post_container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/Post_Logo.png') }}" alt="" id="post_image">
        </a>
        <h3 id="post_title">{{$post['title']}}</h3>
        <p>{{$post['body']}}</p>
        <p>Posted by: {{$post->getUser->name}}</p>
    </div>
    <form action="/add_comment/{{$post->id}}" class="post_form" method="POST">
        @csrf
        <button>Add Comment</button>
    </form>
    <form action="/" class="post_form">
        <button>Go Back</button>
    </form>

</body>
</html>