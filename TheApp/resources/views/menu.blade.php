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
    <div class="hero-section h-[50vh] mt-[9.1vh]" id="home">
        <div class="background-image image1"></div>
        <div class="background-image image2"></div>
        <div class="background-image image3"></div>
    </div>
    <main>
        <section class="car-models" id="menu">
            <h2>Our Car Models</h2>

            <div class="car-categories">
                <button class="category-btn active" data-category="All">All</button>
                @foreach ($types as $type)
                    <button class="category-btn active" data-category="{{ $type }}">{{ $type }}</button>
                @endforeach
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
                        <p> From MYR : {{ $car->price }} Per Day </p>
                        <div class="w-full flex justify-center">
                            <a class="bg-blue-500 text-white rounded-lg whitespace-nowrap py-2 px-5"
                                href="{{ route('car', $car->id) }}">Show Details
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
