<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAREN - Car Rental</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    @if (session('success'))
    <div id="flash-message" class="flash-card flash-success">
        {{ session('success') }}
    </div>
@endif
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

    <div class="hero" id="hero">
        <h1>CAREN</h1>
        <p>Your Ultimate Car Rental Experience</p>
        <a href="/menu" class="cta-button">View Services</a>
    </div>

    <section class="discover">
        <div class="discover-content">
            <h2>Explore the vibrant city of Kuala Lumpur with CAREN car rental</h2>
            <p>CAREN Car Rental offers a wide range of vehicles for your convenience, whether you're a tourist exploring
                the city or a local running errands. Our hassle-free booking process and top-notch customer service
                ensure a smooth experience. Discover Kuala Lumpur with CAREN today!</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </div>
        <div class="discover-image">
            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\background-klcc.jpg" alt="Kuala Lumpur">
        </div>
    </section>

    <section id="services">
        <h2>Efficient and reliable car rental solutions</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\Car-Hire-bg.jpg" alt="Car Rental">
                <h3>Car rental</h3>
                <p>Rent a car and explore the city at your own pace.</p>
            </div>
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\airport-transfer bg.jpg" alt="Airport Transfer">
                <h3>Airport transfer</h3>
                <p>Arrive in style and comfort with our airport transfer service.</p>
            </div>
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\chauffeur bg.jpg" alt="Chauffeur Service">
                <h3>Chauffeur service</h3>
                <p>Sit back and relax while our chauffeur takes you around the city.</p>
            </div>
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\longterm bg.webp" alt="Long-Term Rental">
                <h3>Long-Term rental</h3>
                <p>Explore Kuala Lumpur for an extended period with our long-term rental option.</p>
            </div>
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\event-transport bg.webp" alt="Event Transportation">
                <h3>Event transportation</h3>
                <p>Arrive at your event in style with our premium transportation service.</p>
            </div>
            <div class="service-item">
                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\selfdrive bg.jpeg" alt="Self-Drive Adventures">
                <h3>Self-Drive adventures</h3>
                <p>Embark on a thrilling self-drive adventure in Kuala Lumpur.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact-container">
            <div class="contact-form">
                <h2>Reach out to us for inquiries and reservations.</h2>
                <p>We are here to assist you with all your car rental needs. Let's make your journey in Kuala Lumpur a
                    smooth one!</p>
                <form>
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" placeholder="Jane Smith" required>

                    <label for="email">Email address *</label>
                    <input type="email" id="email" name="email" placeholder="email@website.com" required>

                    <label for="phone">Phone number *</label>
                    <input type="tel" id="phone" name="phone" placeholder="555-555-5555" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your message here..."></textarea>

                    <label class="checkbox-container">
                        <input type="checkbox" name="consent" required>
                        <span class="checkmark"></span>
                        I allow this website to store my submission so they can respond to my inquiry. *
                    </label>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
            <div class="contact-details">
                <h2>Get in touch</h2>
                <ul>
                    <li><i class="fas fa-phone"></i> +6016 277 4594</li>
                    <li><i class="fas fa-envelope"></i> support@caren.my</li>
                    <li><i class="fas fa-map-marker-alt"></i> &nbsp;Intermark Mall, Federal Territory of Kuala Lumpur MY
                    </li><br>
                    <li><strong>Hours:</strong></li>
                    <li class="hours">
                        Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am - 10:00pm
                    </li>
                    <li class="hours">
                        Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am - 10:00pm
                    </li>
                    <li class="hours">
                        Wednesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am - 10:00pm
                    </li>
                    <li class="hours">
                        Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am - 10:00pm
                    </li>
                    <li class="hours">
                        Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am
                        - 10:00pm
                    </li>
                    <li class="hours">
                        Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am - 6:00pm
                    </li>
                    <li class="hours">
                        Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:00am -
                        12:00pm
                    </li>
                </ul>
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
            <li><a href="index2.html#services">Services</a></li>
            <li><a href="reserve.html">Schedule Appointment</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="index2.html#contact">Contact</a></li>
        </ul>
        <br><br>
        <p>&copy; 2024 CAREN. All Rights Reserved. Terms & Conditions</p>
    </footer>
</body>
<style>
    .flash-card {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 25px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        z-index: 1000;
        animation: fadeInOut 5s ease-in-out;
    }

    .flash-success {
        background-color: #4CAF50;
    }

    @keyframes fadeInOut {
        0% { opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { opacity: 0; }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 5000); // Disappear after 5 seconds
        }
    });
</script>

</html>
