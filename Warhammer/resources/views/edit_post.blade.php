<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="/edit_post{{$post['id']}}", method="post">
        @csrf
        @method('PUT');
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body">
            {{$post->body}}
        </textarea>
        <button>Save</button>
    </form>
</body>
</html>