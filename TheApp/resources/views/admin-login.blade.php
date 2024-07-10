<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <body>
        <div class="login-box">
            <img src="{{ asset('images\carimage\logo.png') }}" alt="Cafe Logo" width="200"
                style="display: block; margin: 0 auto" />
            <h2 class="text-4xl">CAREN</h2>
            <form id="loginForm" action="/admin/login" method="POST">
                @csrf
                @method('POST')
                <div class="user-box">
                    <input type="text" class="field" name="email" id="email" placeholder="Email" required />
                </div>
                <div class="user-box">
                    <input type="password" class="field" placeholder="Password" name="password" required />
                </div>
                <button type="submit"
                    class="submitButton crazy-button inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-40">
                    <span>Login</span>
                </button>
                </a>

            </form>
        </div>
    </body>

</html>

<style>
    @keyframes crazyAnimation {

        0%,
        100% {
            transform: translateY(0) scale(1);
            background-color: #3b82f6;
        }

        25% {
            transform: translateY(-10px) scale(1.1);
            background-color: #2563eb;
        }

        50% {
            transform: translateY(10px) scale(0.9);
            background-color: #1d4ed8;
        }

        75% {
            transform: translateY(-10px) scale(1.1);
            background-color: #2563eb;
        }
    }

    .crazy-button {
        animation: crazyAnimation 1s infinite;
    }

    h2 {
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

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
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
        animation: btn-anim3 1s linear infinite;
        animation
    }
</style>

</body>

</html>
