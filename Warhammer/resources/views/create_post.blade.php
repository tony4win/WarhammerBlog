<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <head>
        <div class = "header-container">
            <h1>Warhammer Blog</h1></br>
            <p class="header_paragraph">In the grim darkness of the far future there is only war</p>
        </div>
    </head>
    <div>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title">
            <textarea name="body" placeholder="Content"></textarea>
            <button>Post</button>
        </form>
        <form action="/">
            <button>Cancle</button>
        </form>
    </div>
</body>
</html>