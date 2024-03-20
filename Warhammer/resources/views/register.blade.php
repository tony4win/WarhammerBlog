<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>
<body>

    <head>
        <div class = "header-container">
            <h1>Warhammer Blog</h1></br>
            <p id="header_paragraph">In the grim darkness of the far future there is only war</p>
        </div>
    </head>

    <div class="cred">
        <h3>Register</h3>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="Enter Username" name="name">
            <input type="text" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Enter Password" name="password">
            <button>Register</button>
        </form>
    </div>
</body>
</html>