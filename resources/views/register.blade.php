<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/register.css', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="{{ Vite::asset('resources/images/register.svg') }}" alt="">
        </div>

        <div class="inputs">
            <div class="input-group">
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <label for="name">Seu nome</label>
                    <input type="text" name="name">
            </div>

            <div class="input-group">
                <label for="email">Seu email</label>
                <input type="email" name="email">
            </div>


            <div class="input-group">
                <label for="password">Sua senha</label>
                <input type="password" name="password">
            </div>

            <button class="button-submit" type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>

</html>
