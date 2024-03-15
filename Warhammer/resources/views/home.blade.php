<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/css/app.cs">
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
        @else
            
        @endauth

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

    </main>
    <footer>

    </footer>
    
</body>
</html>