@extends('layouts.app')

@section('title', 'About us')

@section('content')
    <div class="feedback-hero">
        <h1>Customer Feedback</h1>
        <p>See what our customers are saying about us</p>
    </div>

    <section class="feedback-section">
        <div class="feedback-container">
            <h2>Our Happy Customers</h2>
            <div class="flex flex-row space-x-2">
                <!-- Sample feedback items -->

                @foreach ($feedbacks as $feedback)
                    <!-- Feedback item component -->
                    <div class="feedback-item flex flex-col items-start justify-start mb-4 w-1/2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Windows_10_Default_Profile_Picture.svg"
                            alt="Customer Image" class="w-12 h-12 rounded-full mr-4">
                        <div class="feedback-content flex flex-col items-start">
                            <h3 class="text-lg font-bold mb-1">{{ $feedback->message }}</h3>
                            <p class="text-gray-600">{{ $feedback->name }}</p>
                            <div class="rating flex">
                                @for ($i = 0; $i < $feedback->rating; $i++)
                                    <i class="fas fa-star text-yellow-500"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Add more feedback items as needed -->
            </div>
        </div>
    </section>

    <section class="feedback-form-section">
        <div class="feedback-form-container">
            <h2>Send Us Your Feedback</h2>
            <form id="feedback-form" action="/customer/feedback" method="POST">
                @csrf
                @method('POST')
                {{-- <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div> --}}
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select id="rating" name="rating" class=" text-black" required>
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★</option>
                        <option value="3">★★★</option>
                        <option value="2">★★</option>
                        <option value="1">★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Feedback:</label>
                    <textarea id="message" name="message" rows="4" class="text-black" maxlength="80" required></textarea>
                </div>
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        body {
            background: url('https://wallpapercave.com/wp/wp5055258.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        /* Navbar Styles */
        .navbar {
            background-color: rgba(15, 40, 30, 0.9);
            /* Solid background color */
            padding: 10px 10px;
            position: fixed;
            width: 100%;
            z-index: 100;
            top: 0;
            /* Ensure the header stays at the top */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 900;
            color: white;
            padding: 10px 10px;
        }

        .navbar .logo:hover {
            cursor: pointer;
        }

        .menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .menu li {
            margin: 0 10px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .contact-button {
            background-color: white;
            color: #0f281e;
            font-weight: 700;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .feedback-hero {
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.6);
            padding: 100px 20px;
            margin-top: 60px;
        }

        .feedback-hero h1 {
            font-size: 56px;
            margin-bottom: 20px;
        }

        .feedback-hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .feedback-section {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 50px 20px;
            color: #fcfafa;
        }

        .feedback-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .feedback-container h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }



        .feedback-item {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .feedback-item img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
        }

        .feedback-content h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .feedback-content p {
            font-size: 16px;
        }

        .feedback-form-section {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 50px 20px;
            color: #fcfafa;
        }

        .feedback-form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .feedback-form-container h2 {
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
        }

        #feedback-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }

        footer {
            background-color: #0f281e;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        footer ul li {
            margin: 0 10px;
        }

        footer ul li a {
            color: white;
            text-decoration: none;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: #ddd;
        }

        /* Social Icons in Footer */
        footer .social-icons {
            margin: 20px 0;
        }

        footer .social-icons a {
            color: white;
            font-size: 25px;
            margin: 0 50px;
            text-decoration: none;
        }

        footer .social-icons a:hover {
            color: #28a745;
        }
    </style>

@endsection
