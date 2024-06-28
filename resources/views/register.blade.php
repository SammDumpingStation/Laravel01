<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/x-icon" href="/images/laravel.svg" />
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body>
    <div
        class="absolute h-[450px] w-[800px] top-0 rounded-b-full -z-10 left-1/2 -translate-x-1/2 bg-[#989898] bg-[linear-gradient(to_bottom,rgba(255,255,255,0.15)_0%,rgba(0,0,0,0.15)_100%),radial-gradient(at_top_center,rgba(255,255,255,0.40)_0%,rgba(0,0,0,0.40)_120%)] [background-blend-mode:multiply,multiply]">
    </div>
    <h1 class="pt-[50px] pb-[50px] text-center font-black text-7xl ">REGISTER</h1>
    <main
        class="mx-auto my-0 flex flex-col justify-center items-center w-[550px] p-5 bg-primary-black/60  rounded-[30px] backdrop-blur-3xl">
        <form class="w-full flex flex-col items-center justify-center py-4 px-8 gap-8" action="/register"
            method="POST">
            @csrf
            <section class="w-full">
                <div class="flex flex-col mb-2 relative">
                    <label for="name" class="font-thin text-sm cursor-pointer">Username</label>
                    <input id="name"
                        class="text-xl bg-transparent caret-inherit border-b border-primary-white text-primary-white p-2 placeholder-primary-grey"
                        type="text" name="name" value="{{ old('name') }}" placeholder="Create your username"
                        class="input" />
                </div>
                <div class="h-5 pl-2 mb-4">
                    @error('name')
                        <span class="text-primary-red italic">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-2 relative">
                    <label for="email">Email</label>
                    <input id="email"
                        class="text-xl bg-transparent caret-inherit border-b border-primary-white text-primary-white p-2 placeholder-primary-grey"
                        type="email" name="email" value="{{ old('email') }}" placeholder="Enter a valid email"
                        class="input" />
                </div>
                <div class="h-5 pl-2 mb-4">
                    @error('email')
                        <span class="text-primary-red italic">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-2 relative">
                    <label for="pwd">Password</label>
                    <input id="pwd" type="password"
                        class="text-xl bg-transparent caret-inherit border-b border-primary-white text-primary-white p-2 placeholder-primary-grey"
                        name="password" placeholder="Create your password" class="input" />
                    <img id="pwdEye" class="h-8 w-8 absolute bottom-2 right-0 cursor-pointer" src="/images/hide.png"
                        alt="" />
                </div>
                <div class="h-5 pl-2 mb-4">
                    @error('password')
                        <span class="text-primary-red italic">*{{ $message }}*</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-2 relative">
                    <label for="re-pwd">Repeat Password</label>
                    <input id="re-pwd" type="password"
                        class="text-xl bg-transparent caret-inherit border-b border-primary-white text-primary-white p-2 placeholder-primary-grey"
                        name="password_confirmation" placeholder="Repeat your password" class="input" />
                    <img id="re-pwdEye" class="h-8 w-8 absolute bottom-2 right-0 cursor-pointer" src="/images/hide.png"
                        alt="" />
                </div>
            </section>
            <button
                class="w-full py-3 text-2xl font-bold bg-primary-white text-primary-black rounded-xl border-transparent border-solid border hover:border-primary-white hover:bg-transparent hover:text-primary-white">Register</button>
        </form>
        <form action="/login" method="GET">
            @csrf
            <p>
                Already have an account?
                <button class="underline cursor-pointer">Log In!</button>
            </p>
        </form>
    </main>

    <script>
        const passwordField = document.getElementById("pwd");
        const pwdEye = document.getElementById("pwdEye");
        const repeatPassField = document.getElementById("re-pwd");
        const repeatBtn = document.getElementById("re-pwdEye");

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
        repeatBtn.addEventListener("click", function() {
            const currentType = repeatPassField.getAttribute("type");

            if (currentType === "password") {
                repeatPassField.setAttribute("type", "text");
                repeatBtn.setAttribute("src", "/images/show.png");
            } else {
                repeatPassField.setAttribute("type", "password");
                repeatBtn.setAttribute("src", "/images/hide.png");
            }
        });
    </script>
</body>

</html>
