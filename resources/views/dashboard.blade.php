<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="/images/laravel.svg">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body>
    @auth
        <h1 class="text-primary-black ">Welcome {{ Auth::user()->name }} </h1>
    @else
        <h1>Unrestricted Enter</h1>
    @endauth

    <form action="/logout" method="POST">
      @csrf
      <button class="text-primary-black border-primary-black border p-2">Log Out</button>
    </form>
</body>

</html>
