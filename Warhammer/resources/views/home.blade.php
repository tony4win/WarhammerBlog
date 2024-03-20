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
        <div class = "header-container">
            <h1>Warhammer Blog</h1></br>
            <p class="header_paragraph">In the grim darkness of the far future there is only war</p>
        </div>
    </head>
    <main>

        @auth

            <form action="/logout" method="POST" class="form_after_login">
                @csrf
                <button class = "button_after_login">Logout</button>
            </form>

            <form action="/create_page" method="GET" class="form_after_login">
                @csrf
                <button class = "button_after_login" type="submit">Create Post</button>
            </form>

            <div>
                @foreach($posts as $post)
                <div class="post_container">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/Post_Logo.png') }}" alt="" id="post_image">
                    </a>
                    <h3 id="post_title">{{$post['title']}}</h3>
                    <p>{{$post['body']}}</p>
                    <p>Posted by: {{$post->getUser->name}}</p>
                    
                    <form action="/edit_post/{{$post->id}}" method="GET" class="post_form">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                    
                    <form action="/delete_post/{{$post->id}}" method="POST" class="post_form">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>

                    <form action="/display_post/{{$post->id}}" method="GET" class="post_form">
                        @csrf
                        <button type="submit">Open</button>
                    </form>
                </div>
                @endforeach
            </div>

        @else

            <div class="cred">
                <form action="/login" method="POST">
                    @csrf
                    <input class="center_input" type="text" placeholder="Enter Username" name="login_name">
                    <br>
                    <input class="center_input" type="password" placeholder="Enter Password" name="login_password">
                    <br>
                    <button class="center_button">Login</button>
                </form>
            </div>

            <div class="just_button">
                <form action="/register_page" method="GET">
                    <button class="special_button" type="submit">Register Now</button>
                </form>
            </div>

            <div class="just_button">
                <form action="/about" method="GET">
                    <button class="special_button" type="submit">About</button>
                </form>
            </div>

        @endauth

    </main>
    <footer>

    </footer>
    
</body>
</html>