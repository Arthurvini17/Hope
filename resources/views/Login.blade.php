<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/login.css', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="{{ Vite::asset('resources/images/register.svg') }}" alt="">
        </div>

        <div class="inputs">
            <form action="{{ route('login.auth') }}" method="post">
                @csrf
                <div class="input-group">
                    <h1 class="log-text">Login</h1>
                    <label for="email">Seu email</label>
                    <input type="email" name="email">
                </div>


                <div class="input-group">
                    <label for="password">Sua senha</label>
                    <input type="password" name="password">
                </div>

                <button class="button-submit" type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>
