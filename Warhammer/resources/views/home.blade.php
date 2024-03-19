<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">


</head>
<body>
    <head>
        <h1>Home</h1>
    </head>
    <main>

        @auth
            <p>Login Sucess</p>
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
            <div>
                <h2>Create Post</h2>
                <form action="/create-post" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="Title">
                    <textarea name="body" placeholder="Content"></textarea>
                    <button>Post</button>
                </form>
            </div>
            <!-- div for displaying posts-->
            <div>
                <h2>Posts</h2>
                @foreach($posts as $post)
                <div>
                    <h3>{{$post['title']}}</h3>
                    {{$post['body']}}
                    <p>Posted by: {{$post->getUser->name}}</p>
                    <p><a href="/edit_post/{{$post->id}}">Edit</a></p>
                    <form action="/delete_post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
                @endforeach
            </div>

        @else
        
            <div>
                <h3>Register</h3>
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" placeholder="Enter Username" name="name">
                    <input type="text" placeholder="Enter Email" name="email">
                    <input type="password" placeholder="Enter Password" name="password">
                    <button>Register</button>
                </form>
            </div>

            <div>
                <h3>Login</h3>
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" placeholder="Enter Username" name="login_name">
                    <input type="password" placeholder="Enter Password" name="login_password">
                    <button>Login</button>
                </form>
            </div>
        @endauth

    </main>
    <footer>

    </footer>
    
</body>
</html>