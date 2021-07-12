<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Todo App</title>
</head>

<body>

    <div id="overlay">

    </div>
    <div id="center">
        <header>
            <h1>Todo app</h1>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

</body>

</html>
