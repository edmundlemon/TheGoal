<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car in Malaysia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    @include('header')
    <div class="hero-section h-[50vh] mt-[10vh]" id="home">
        <div class="background-image image1"></div>
        <div class="background-image image2"></div>
        <div class="background-image image3"></div>
    </div>

    <main>
        <section class="car-models" id="menu">
            <h2>Our Car Models</h2>
            <div class="car-categories">
                <button class="category-btn active" data-category="All">All</button>
                <button class="category-btn" data-category="Compact">Compact</button>
                <button class="category-btn" data-category="Sedan">Sedan</button>
                <button class="category-btn" data-category="Mpv">MPV</button>
                <button class="category-btn" data-category="Suv">SUV</button>
            </div>
            <div class="car-list">
                @foreach ($cars as $car)
                    <div class="car-item" data-category="{{ $car->type }}">
                        <div class="image-container">
                            <img src="{{ asset($car->image) }}" alt="{{ $car->name }}">
                        </div>
                        <h3>{{ $car->brand }} {{ $car->model }}</h3>
                        <div class="car-features">
                            <div class="feature-item">
                                <img src="{{ asset('images/carimage/sedan-car-front.png') }}" alt="Gasoline Icon">
                                <span>{{ $car->type }}</span>
                            </div>
                        </div>
                        <p> From MYR : {{ $car->price }} </p>
                        <div class="w-full flex justify-center">
                            <a class="bg-blue-500 text-white w-24 rounded-lg whitespace-nowrap py-2"
                                href="{{ route('show', $car->id) }}">Show Details
                            </a>
                        </div>
                    </div>
                @endforeach
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

        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.category-btn');
            const carItems = document.querySelectorAll('.car-item');

            categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const category = button.getAttribute('data-category');

                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    carItems.forEach(item => {
                        if (category === 'All' || item.getAttribute('data-category') ===
                            category) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });

        // Set default category to show all car items
        document.querySelector('.category-btn[data-category="all"]').click();
    </script>
</body>

</html>
