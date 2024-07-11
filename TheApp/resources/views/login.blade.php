<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/acc.css') }}">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>


    <div class="hero">
        <div class="form">
            <a href="/admin/login" id="IconLink">
                <i class="fa fa-user" id="Icon"></i>
            </a>
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle" onclick="login()">Login</button>
                <button type="button" class="toggle" onclick="register()">
                    Register
                </button>
            </div>
            <div class="tittle">
                <h1 style="font-weight: 900">CAREN</h1>
            </div>
            <!-- Login -->
            <form id="login" class="input" method="POST" action="/login">
                @csrf
                @method('POST')
                <input id="login_email" name="login_email" type="text" class="field" placeholder="Email"
                    ref="reference" required />
                @error('login_email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="password" name="password" type="password" class="field" placeholder="Password" required />
                <!-- <input type="checkbox" class="checkbox"><span>Remember the Password</span> -->
                <a href="/forgot-password">Forgot Password?</a>
                <button type="submit" class="submit" onclick="login_user()">
                    LOGIN
                </button>
            </form>

            <!-- Register -->
            <form id="register" class="input" action="/register" method="POST">
                @csrf
                @method('POST')
                <input id="name" name="name" type="text" class="field" placeholder="Name" required />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="reg_email" name="email" type="email" class="field" placeholder="Email" required />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="password" name="password" type="password" class="field" placeholder="Password" required />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="password_confirmation" name="password_confirmation" type="password" class="field"
                    placeholder="Password Confirmation" required />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="birth_date" name="birth_date" type="date" class="field" placeholder="Birthday" required
                    title="Please enter your birth date" />
                @error('birth_date')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <div class="select-wrapper">
                    <select id="gender" name="gender" class="field">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                @error('gender')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <div class="select-wrapper">
                    <select id="security_question" name="security_question" class="field">
                        <option value="" disabled selected>Select one from below</option>
                        <option value="What is your pet's name?">What is your pet's name?</option>
                        <option value="When is your parent's birthday?">When is your parent's birthday?</option>
                        <option value="What is your favorite celebrity?">What is your favorite celebrity?</option>
                    </select>
                </div>
                @error('security_question')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <input id="security_answer" name="security_answer" type="text" class="field" placeholder="Security Answer" required />
                @error('security_answer')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
                <!-- <input type="checkbox" class="checkbox"><span>Remember the Password</span> -->
                <button type="submit" class="submit" onclick="register_user()">Register</button>
            </form>
        </div>

    </div>

    <footer>
        <br><br>
        <div class="copyright">© COPYRIGHT CAREN ®</div>
        <br>
        <p>Web design by CAREN</p>
        <br><br>
    </footer>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
            document.title = "Register";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
            document.title = "Login";
        }

        function validateLogin(event) {}

        // function login_user() {
        //   //userIdInput.value
        //   var userIdInput = document.querySelector(
        //     '.field[placeholder="User ID"]'
        //   );
        //   //passwordInput.value
        //   var passwordInput = document.querySelector(
        //     '.field[placeholder="Password"]'
        //   );

        //   if (
        //     userIdInput.value.trim() === "" ||
        //     passwordInput.value.trim() === ""
        //   ) {
        //     alert("Please fill in all fields.");
        //   } else {
        //     console.log("Login Successful");
        //     console.log("User ID: " + userIdInput.value);
        //     console.log("Password: " + passwordInput.value);
        //   }
        //   event.preventDefault();
        // }

        // function register_user() {
        //   var userIdInput = document.getElementById("reg_user_id").value;
        //   var emailInput = document.getElementById("reg_email").value;
        //   var passwordInput = document.getElementById("reg_password").value;
        //   var confirmationPasswordInput = document.getElementById(
        //     "reg_confirmation_password"
        //   ).value;

        // if (
        //   userIdInput.trim() === "" ||
        //   emailInput.trim() === "" ||
        //   passwordInput.trim() === "" ||
        //   confirmationPasswordInput.trim() === ""
        // ) {
        //   alert("Please fill in all fields.");
        // } else if (passwordInput !== confirmationPasswordInput) {
        //   alert("Passwords do not match.");
        // } else {
        //register logic
        // console.log("Registration Successful");
        // console.log("User ID: " + userIdInput);
        // console.log("Email: " + emailInput);
        // console.log("Password: " + passwordInput);
        // console.log("Password Confirmation: " + confirmationPasswordInput);

        // }

        // event.preventDefault();
        // }
    </script>
</body>

</html>
