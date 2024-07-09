<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Request Form</title>
    <link rel="stylesheet" href="{{ asset('css/reserve.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css">
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
    
    <main>
        <section class="form-section">
            <h1>Meeting Request Form</h1><br>
            <h2>We look forward to meeting with you. </h2>
            <p>To schedule an appointment, pick a time that works for you and share your contact information. After you submit the form, check your email for an appointment confirmation.</p>
            
            <form id="meeting-form">
                <label for="date">Select a date and time *</label>
                <input type="date" id="date-picker" name="date" required>
                
                <label for="time">Select a time slot *</label>
                <select id="time-slot" name="time" required>
                    <option value="" disabled selected>Select a time slot</option>
                    <option value="9:00 AM">9:00 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="1:00 PM">1:00 PM</option>
                    <option value="2:00 PM">2:00 PM</option>
                    <option value="3:00 PM">3:00 PM</option>
                    <option value="4:00 PM">4:00 PM</option>
                    <option value="5:00 PM">5:00 PM</option>
                </select>

                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email address *</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone number *</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="services">Which service or services are you interested in?</label>
                <div class="services">
                    <input type="checkbox" id="car-rental" name="services" value="Car rental">
                    <label for="car-rental">Car rental</label>
                    <input type="checkbox" id="airport-transfer" name="services" value="Airport transfer">
                    <label for="airport-transfer">Airport transfer</label>
                    <input type="checkbox" id="chauffeur-service" name="services" value="Chauffeur service">
                    <label for="chauffeur-service">Chauffeur service</label>
                    <input type="checkbox" id="long-term-rental" name="services" value="Long-Term rental">
                    <label for="long-term-rental">Long-Term rental</label>
                    <input type="checkbox" id="event-transportation" name="services" value="Event transportation">
                    <label for="event-transportation">Event transportation</label>
                    <input type="checkbox" id="self-drive" name="services" value="Self-Drive adventures">
                    <label for="self-drive">Self-Drive adventures</label>
                </div>

                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <script>

    </script>
</body>
</html>