<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car in Malaysia</title>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
@include('header')
    <div class="hero-section" id="home">
        <div class="background-image image1"></div>
        <div class="background-image image2"></div>
        <div class="background-image image3"></div>
        <div class="form-container">
            <div class="form-tabs">
                <button class="form-tab active" id="car-tab">Car</button>
                <button class="form-tab" id="chauffeur-tab">Chauffeur</button>
            </div>
            <form id="car-rental-form" class="rental-form active">
                <div class="form-group">
                    <label for="pickup-location">Pick-up Location</label>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Pick-up Location">
                </div>
                <div class="form-group">
                    <label for="pickup-date">Pick-up date</label>
                    <input type="date" id="pickup-date" name="pickup-date">
                    <input type="time" id="pickup-time" name="pickup-time" value="09:00">
                </div>
                <div class="form-group">
                    <label for="return-date">Return date</label>
                    <input type="date" id="return-date" name="return-date">
                    <input type="time" id="return-time" name="return-time" value="09:00">
                </div>
                <div class="form-group">
                    <input type="checkbox" id="return-different-location" name="return-different-location">
                    <label for="return-different-location">Return to another location</label>
                </div>
                <div class="form-group" id="return-location-group" style="display: none;">
                    <input type="text" id="return-location" name="return-location" placeholder="Return Location">
                </div>
                <button type="submit">Search</button>
            </form>
            <form id="chauffeur-rental-form" class="rental-form">
                <div class="form-group">
                    <label for="pickup-location-chauffeur">Pick-up Location</label>
                    <input type="text" id="pickup-location-chauffeur" name="pickup-location-chauffeur"
                        placeholder="Pick-up Location">
                </div>
                <div class="form-group">
                    <label for="dropoff-location-chauffeur">Drop-off Location</label>
                    <input type="text" id="dropoff-location-chauffeur" name="dropoff-location-chauffeur"
                        placeholder="Drop-off Location">
                </div>
                <div class="form-group">
                    <label for="pickup-date-chauffeur">Pick-up date</label>
                    <input type="date" id="pickup-date-chauffeur" name="pickup-date-chauffeur">
                    <input type="time" id="pickup-time-chauffeur" name="pickup-time-chauffeur" value="09:00">
                </div>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <main>
        <section class="car-models" id="menu">
            <h2>Our Car Models</h2>
            <div class="car-categories">
                <button class="category-btn active" data-category="all">All</button>
                <button class="category-btn" data-category="compact">Compact</button>
                <button class="category-btn" data-category="sedan">Sedan</button>
                <button class="category-btn" data-category="mpv">MPV</button>
                <button class="category-btn" data-category="suv">SUV</button>
            </div>
            <div class="car-list">
                <!-- Car Display Card -->

                {{-- @foreach ($cars as $car)
                    {
                    <div class="car-item" data-category="{{ $car->category }}">
                        <div class="image-container">
                            <img src="{{ $car->image }}" alt="{{ $car->name }}">
                        </div>
                        <h3>{{ $car->name }}</h3>
                        <div class="car-features">
                            <div class="feature-item">
                                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png"
                                    alt="Car Icon">
                                <span>{{ $car->category }}</span>
                            </div>
                            <div class="feature-item">
                                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                                <span>{{ $car->type }}</span>
                            </div>
                            <div class="feature-item">
                                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                                <span>{{ $car->seats + ' Seats' }}</span>
                            </div>
                            <div class="feature-item">
                                <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png"
                                    alt="Automatic Icon">
                                <span>{{ $car->transmission }}</span>
                            </div>
                        </div>
                        <p>{{ 'From MYR ' + $car->price }} </p>
                        <button onclick="function($car->id)">Book Now</button>
                    </div>
                    } --}}

            </div>
        </section>
    </main>

    @include('footer')

    <script src="menu.js"></script>
    <script>
        // Tab switching logic
        document.getElementById('car-tab').addEventListener('click', function() {
            document.getElementById('car-tab').classList.add('active');
            document.getElementById('chauffeur-tab').classList.remove('active');
            document.getElementById('car-rental-form').classList.add('active');
            document.getElementById('chauffeur-rental-form').classList.remove('active');
        });

        document.getElementById('chauffeur-tab').addEventListener('click', function() {
            document.getElementById('chauffeur-tab').classList.add('active');
            document.getElementById('car-tab').classList.remove('active');
            document.getElementById('chauffeur-rental-form').classList.add('active');
            document.getElementById('car-rental-form').classList.remove('active');
        });

        // Validation for car rental form
        document.getElementById('car-rental-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the form inputs
            const pickupLocation = document.getElementById('pickup-location').value;
            const pickupDate = document.getElementById('pickup-date').value;
            const pickupTime = document.getElementById('pickup-time').value;
            const returnDate = document.getElementById('return-date').value;
            const returnTime = document.getElementById('return-time').value;
            const returnDifferentLocation = document.getElementById('return-different-location').checked;
            const returnLocation = document.getElementById('return-location').value;

            // Check if all required fields are filled
            if (pickupLocation && pickupDate && pickupTime && returnDate && returnTime && (!
                    returnDifferentLocation || (returnDifferentLocation && returnLocation))) {
                window.location.href = 'booking.html';
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Validation for chauffeur rental form
        document.getElementById('chauffeur-rental-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the form inputs
            const pickupLocation = document.getElementById('pickup-location-chauffeur').value;
            const dropoffLocation = document.getElementById('dropoff-location-chauffeur').value;
            const pickupDate = document.getElementById('pickup-date-chauffeur').value;
            const pickupTime = document.getElementById('pickup-time-chauffeur').value;

            // Check if all required fields are filled
            if (pickupLocation && dropoffLocation && pickupDate && pickupTime) {
                window.location.href = 'booking.html'; // Redirect to menu.html
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Toggle return location input visibility
        document.getElementById('return-different-location').addEventListener('change', function() {
            const returnLocationGroup = document.getElementById('return-location-group');
            if (this.checked) {
                returnLocationGroup.style.display = 'block';
            } else {
                returnLocationGroup.style.display = 'none';
            }
        });

        // Category filtering logic
        const categoryButtons = document.querySelectorAll('.category-btn');
        const carItems = document.querySelectorAll('.car-item');

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to the clicked button
                button.classList.add('active');

                // Get the category from the clicked button
                const category = button.getAttribute('data-category');

                // Show/hide car items based on category
                carItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Set default category to show all car items
        document.querySelector('.category-btn[data-category="all"]').click();
    </script>
</body>

</html>
