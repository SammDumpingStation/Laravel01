<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/dashboard.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/images/laravel.svg">

    <title>Dashboard</title>
</head>

<body>
    @auth
        <h1>Welcome {{ Auth::user()->name }} </h1>
    @else
        <h1>Unrestricted Enter</h1>
    @endauth

    <form action="/logout" method="POST">
      @csrf
      <button>Log Out</button>
    </form>
</body>

</html>
