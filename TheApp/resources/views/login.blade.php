<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/acc.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
          <input
            id="login_email"
            name="login_email"
            type="text"
            class="field"
            placeholder="Email"
            ref="reference"
            required
          />
          @error('login_email')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <input
            id="password"
            name="password"
            type="password"
            class="field"
            placeholder="Password"
            required
          />
          <!-- <input type="checkbox" class="checkbox"><span>Remember the Password</span> -->
          <button type="submit" class="submit" onclick="login_user()">
            LOGIN
          </button>
        </form>

        <!-- Register -->
        <form id="register" class="input" action="/register" method="POST">
          @csrf
          @method('POST')
          <input
            id="name"
            name="name"
            type="text"
            class="field"
            placeholder="Name"
            required
          />
          @error('name')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <input
            id="reg_email"
            name="reg_email"
            type="email"
            class="field"
            placeholder="Email"
            required
          />
          @error('email')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <input
            id="password"
            name="password"
            type="password"
            class="field"
            placeholder="Password"
            required
          />
          @error('password')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <input
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            class="field"
            placeholder="Password Confirmation"
            required
          />
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <input
          id="birth_date"
          name="birth_date"
          type="date"
          class="field"
          placeholder="Birthday"
          required
          />
          @error('birth_date')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">female</option>
          </select>
          @error('gender')
          <p class="text-red-500 text-xs mt-1">
              {{$message}}
          </p>
          @enderror
          <!-- <input type="checkbox" class="checkbox"><span>Remember the Password</span> -->
          <button type="submit" class="submit" onclick="register_user()">Register</button>
        </form>
      </div>
      <div class="copyright">© COPYRIGHT CAREN ®</div>
    </div>

    <footer>
      <br />
      <ul>
        <li><a href="index2.html#services">Services</a></li>
        <li><a href="index2.html#appointment">Schedule Appointment</a></li>
        <li><a href="index2.html#intake">Complete Intake</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="index2.html#contact">Contact</a></li>
      </ul>
      <br />
      <p>Web design by CAREN</p>
    </footer>

    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("btn");

      function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }

      function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
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
