<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/general.css">
  <link rel="stylesheet" href="/css/main.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="/images/laravel.svg">
  <title>Laravel-V01</title>
</head>
<body>
  <main>
    <div id="black-circle"></div>

    <form action="/register" method="post">
      @csrf
      <h1>LARAVEL V-01</h1>

      <section id="login-body">
        <div class="input-field">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="Enter your username" class="input">
        </div>
        <div class="input-field">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Enter your password" class="input">
        </div>
        <input type="submit" value="login" id="login-button">
        <p>Don't have an account? <a href="" id="link">Sign-up</a> </p>
      </section>
    </form>    
  </main>

</body>
</html>