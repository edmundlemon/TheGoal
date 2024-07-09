<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CAREN</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            &nbsp;<div class="logo" onclick="window.location.href='/'">CAREN</div>
            <ul class="menu" id="navbar-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/menu">Menu</a></li>
                <li><a href="/reservation">Reservation</a></li>
            </ul>
            <button class="contact-button" onclick="window.location.href='/login'">Login</button>&nbsp;
        </nav>
    </header>

    <div class="hero">
        <h1>About CAREN</h1>
    </div>

    <section class="intro">
        <h2>Your Car, Everywhere</h2>
        <p>Welcome to CAREN, where we redefine your car rental, vehicle leasing, car sharing, and car-with-driver (chauffeur) experiences! As Malaysia's premier mobility services provider, we've got your journey covered with our fleet of up to 1000s of well-maintained vehicles, all powered by the latest technological innovations.</p>
        <p>Experience the joy of effortless travel through our cutting-edge technology and top-notch service. So, fasten your seatbelt, and let's drive with a smile in an unforgettable adventure together with CAREN.</p>
    </section>

    <section class="purpose">
        <div class="purpose-item">
            <h3>Business Purpose</h3>
            <p>Connecting travelers with mobility services through technology.</p>
        </div>
        <div class="purpose-item">
            <h3>Vision And Mission</h3>
            <p>To be the leading world-class seamless end-to-end mobility services provider by enhancing travelers' journeys with innovative and accessible experiences, prioritizing joy, ease, and inspiration.</p>
        </div>
    </section>

    <section class="values">
        <h2>Values</h2>
        <div class="value-item-container">
            <div class="value-item">
                <img src="https://www.wahdah.my/img/content-page/idea-message-streamline.png?1717663864" alt="Icon 1">
                <h3>Inventive Solutions and Innovation</h3>
            </div>
            <div class="value-item">
                <img src="https://www.wahdah.my/img/content-page/self-care-streamline.png?1717663864" alt="Icon 2">
                <h3>Accessibility and Inclusiveness</h3>
            </div>
            <div class="value-item">
                <img src="https://www.wahdah.my/img/content-page/laptop-smiley-streamline.png?1717663864" alt="Icon 3">
                <h3>Joy and Happiness in a Conducive Environment</h3>
            </div>
            <div class="value-item">
                <img src="https://www.wahdah.my/img/content-page/support-chat-streamline.png?1717663864" alt="Icon 4">
                <h3>Transparent and Trusted Customer Service</h3>
            </div>
        </div>
    </section>
    

    <section class="leadership">
        <h2>Leadership</h2>
        <div class="leaders">
            <div class="leader-item">
                <img src="https://i.ytimg.com/vi/eoWZogb3Iyg/maxresdefault.jpg" alt="Leader 1">
                <h3>Will Smith</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="leader-item">
                <img src="https://cdn.amomama.com/e2dba8f5acefe5612d7ce8b0d6abd93c44859281573229513.jpg" alt="Leader 2">
                <h3>John Cena</h3>
                <p>Chief Technology Officer</p>
            </div>
        </div>
    </section>

    <footer><br>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <ul>

            <li><a href="/reservation">Schedule Appointment</a></li>
            <li><a href="/feedback">Feedback</a></li>
            <li><a href="/faq">FAQ</a></li>

        </ul>
        <br><br>
        <p>&copy; 2024 CAREN. All Rights Reserved. Terms & Conditions</p>
    </footer>
</body>
</html>
