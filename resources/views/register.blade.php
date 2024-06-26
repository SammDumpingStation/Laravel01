<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/authenticate.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/images/laravel.svg">
    <title>Laravel-V01</title>
</head>

<body>
    <div id="black-circle"></div>
    <h1>LARAVEL V-01</h1>
    <main>
        <form class="main" action="/register" method="POST">
            @csrf
            <section class="login-body">
                <div class="input-field">
                    <label for="name">Username</label>
                    <input id="name" type="text" name="username" value="{{ old('username') }}" placeholder="Create your username"
                        class="input">
                </div>
                <div class="validate-container">
                    @error('username')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="input-field">
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Enter a valid email" class="input">
                </div>
                <div class="validate-container">
                    @error('email')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="input-field">
                    <label for="pwd">Password</label>
                    <input id="pwd" type="password" name="password" placeholder="Create your password"
                        class="input">
                </div>
                <div class="validate-container">
                    @error('password')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="input-field">
                    <label for="re-pwd">Repeat Password</label>
                    <input id="re-pwd" type="password" name="re-password" placeholder="Repeat your password"
                        class="input">
                </div>
                <div class="validate-container">
                    @error('re-password')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>
            </section>
            <button class="auth-button">Register</button>
        </form>
        <form action="/login" method="POST">
            <p>Already have an account? <button class="in-out-button">Sign Up!</button> </p>
        </form>
    </main>

</body>

</html>
