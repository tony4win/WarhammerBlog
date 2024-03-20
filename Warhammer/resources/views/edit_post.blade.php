<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>
<body id="edit_post_body">
    <head>
        <div class = "header-container">
            <h1>Warhammer Blog</h1></br>
            <p class="header_paragraph">In the grim darkness of the far future there is only war</p>
        </div>
    </head>
    <div>
        <form action="/edit_post/{{$post['id']}}", method="post">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}">
            <textarea name="body" cols="100" rows="10">{{$post->body}}</textarea>
            <button>Save</button>
        </form>
    </div>

    <div class="just_button">
        <form action="/" class="post_form">
            <button>Cancle</button>
        </form>
    </div>

</body>
</html>