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
    <h1>Welcome!</h1>

    <main>
        <form class="main" action="/login" method="POST">
            @csrf
            <section class="login-body">
                <div class="input-field">
                    <label for="name">Username</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        placeholder="Username or Email" class="input">
                </div>
                <div class="validate-container">
                    @error('name')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="input-field">
                    <label for="pwd">Password</label>
                    <input id="pwd" type="password" name="password" placeholder="Create your password"
                        class="input">
                    <img id="pwdEye" src="/images/hide.png" alt="">

                </div>
                <div class="validate-container">
                    @error('password')
                        <span class="validate">*{{ $message }}*</span>
                    @enderror
                </div>
            </section>
            <button class="auth-button">Log In</button>
        </form>
        <form action="/" method="GET">
            @csrf
            <p>Don't have an account? <button class="in-out-button">Sign Up!</button> </p>
        </form>
    </main>

        <script>
        const passwordField = document.getElementById("pwd");
        const pwdEye = document.getElementById("pwdEye");

        pwdEye.addEventListener("click", function() {
            const currentType = passwordField.getAttribute("type");

            if (currentType === "password") {
                passwordField.setAttribute("type", "text");
                pwdEye.setAttribute("src", "/images/show.png");
            } else {
                passwordField.setAttribute("type", "password");
                pwdEye.setAttribute("src", "/images/hide.png");
            }
        });
    </script>

</body>

</html>
