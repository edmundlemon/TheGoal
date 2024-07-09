<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN LOGIN</title>
  </head>

  <body>
    <div class="login-box">
      <img
        src="carimage\logo.png"
        alt="Cafe Logo"
        width="200"
        style="display: block; margin: 0 auto"
      />
      <h2>CAREN</h2>
      <form id="loginForm">
        <div class="user-box">
          <input type="text" class="field" placeholder="User ID" required />
        </div>
        <div class="user-box">
          <input
            type="password"
            class="field"
            placeholder="Password"
            required
          />
        </div>
        <a href="admin page.html" id="submitButton">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Submit
        </a>
      </form>
    </div>
  </body>
</html>

<script src="script.js">
  document.addEventListener("DOMContentLoaded", function () {
    var submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click", validateLogin);
  });

  function validateLogin(event) {
    var userIdInput = document.querySelector(
      '.field[placeholder="User ID"]'
    );
    var passwordInput = document.querySelector(
      '.field[placeholder="Password"]'
    );

    if (
      userIdInput.value.trim() === "" ||
      passwordInput.value.trim() === ""
    ) {
      alert("Please fill in all fields.");
      event.preventDefault(); // Prevent the default form submission
    }
  }

</script>


<style>
  h2{
    font-family: Algerian, sans-serif;
    font-size: 36px;
  }
  body {
    font-family: sans-serif;
    background: #34495e;
  }

  .login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }

  .login-box h2 {
    text-align: center;
    margin-bottom: 40px;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    background: transparent;
  }

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    pointer-events: none;
    transition: 0.5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;
  }

  .login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03a9f4;
    font-size: 16px;
    text-transform: uppercase;
    text-decoration: none;
    overflow: hidden;
    transition: 0.5s;
    margin-top: 40px;
    letter-spacing: 4px;
    border-radius: 2px;
  }

  .login-box a:hover {
    background: #03a9f4;
    color: white;
    border-radius: 50px;
    box-shadow: 0 0 5px #03a9f4,
                0 0 25px #03a9f4,
                0 0 50px #03a9f4,
                0 0 100px #03a9f4;
  }

  .login-box a span {
    position: absolute;
    display: block;
  }

  .login-box a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03a9f4);
    animation: btn-anim1 1s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,
    100% {
      left: 100%;
    }
  }

  .login-box a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03a9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: 0.25s;
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,
    100% {
      top: 100%;
    }
  }

  .login-box a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03a9f4);
    animation: btn-anim2 1s linear infinite;
  }
</style>