<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car in Malaysia</title>
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="booking.js" defer></script>
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
                <!-- Compact Cars -->
                <div class="car-item" data-category="compact">
                    <div class="image-container">
                        <img src="carimage/toyotayaris.png" alt="Toyota Yaris 1.5">
                    </div>
                    <h3>Toyota Yaris 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Compact</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 300.00</p>
                    <button onclick="selectVehicle({
                        image: 'carimage/toyotayaris.png',
                        name: 'Toyota Yaris 1.5 (A)',
                        specs: ['Compact', 'Gasoline', '5 Seats', 'Automatic'],
                        price: 'From MYR 300.00'
                    })">Book Now</button>
                </div>
                <div class="car-item" data-category="compact">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondajazz.png" alt="Honda Jazz 1.5">
                    </div>
                    <h3>Honda Jazz 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Compact</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 270.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="compact">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondacityhatchback.jpg" alt="Honda City Hatchback 1.5">
                    </div>
                    <h3>Honda City Hatchback 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Compact</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 270.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="compact">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduamyvi.png" alt="Perodua Myvi">
                    </div>
                    <h3>Perodua Myvi (3rd Gen) 1.3 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Compact</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 170.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="compact">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduaaxia.png" alt="Perodua Axia">
                    </div>
                    <h3>Perodua Axia (2nd Gen) 1.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Compact</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 140.00</p>
                    <button>Book Now</button>
                </div>

                <!-- Sedan Cars -->
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\Proton Saga.png" alt="Proton Saga">
                    </div>
                    <h3>Proton Saga 1.3 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 150.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduabezza.png" alt="Perodua Bezza">
                    </div>
                    <h3>Perodua Bezza 1.3 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 150.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotavios.png" alt="Toyota Vios">
                    </div>
                    <h3>Toyota Vios 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 300.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondacity.png" alt="Honda City">
                    </div>
                    <h3>Honda City 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 270.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondacivic.png" alt="Honda Civic">
                    </div>
                    <h3>Honda Civic 1.8 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 470.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\volkswagenpassat.png" alt="Volkswagen Passat">
                    </div>
                    <h3>Volkswagen Passat 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 400.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\nissanteena.png" alt="Nissan Teena">
                    </div>
                    <h3>Nissan Teena 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 400.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="sedan">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotaaltis.png" alt="Toyota Altis">
                    </div>
                    <h3>Toyota Altis 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>Sedan</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 400.00</p>
                    <button>Book Now</button>
                </div>

                <!-- MPV Cars -->
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\protonexora.jpg" alt="Proton Exora">
                    </div>
                    <h3>Proton Exora 1.6 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 280.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduaalza.png" alt="Perodua Alza">
                    </div>
                    <h3>Perodua Alza 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 250.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotainnova.png" alt="Toyota Innova">
                    </div>
                    <h3>Toyota Innova 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 280.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotavellfire.jpg" alt="Toyota Vellfire">
                    </div>
                    <h3>Toyota Vellfire 2.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 750.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\nissan_serena.jpg" alt="Nissan Serena">
                    </div>
                    <h3>Nissan Serena 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 400.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="mpv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hyundaistarex.png" alt="Hyundai Starex">
                    </div>
                    <h3>Hyundai Starex Plus 2.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>MPV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>10 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 630.00</p>
                    <button>Book Now</button>
                </div>

                <!-- SUV Cars -->
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduaativa.png" alt="Perodua Ativa">
                    </div>
                    <h3>Perodua Ativa 1.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 290.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\peroduaaruz.jpg" alt="Perodua Aruz">
                    </div>
                    <h3>Perodua Aruz 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 280.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\protonx50.jpg" alt="Proton X50">
                    </div>
                    <h3>Proton X50 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 380.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\protonx70.png" alt="Proton X70">
                    </div>
                    <h3>Proton X70 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 450.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotarush.png" alt="Toyota Rush">
                    </div>
                    <h3>Toyota Rush 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 330.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\toyotaveloz.jpeg" alt="Toyota Veloz">
                    </div>
                    <h3>Toyota Veloz 2.0 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>7 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 380.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondacrv.png" alt="Honda CR-V">
                    </div>
                    <h3>Honda CR-V 1.5 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 560.00</p>
                    <button>Book Now</button>
                </div>
                <div class="car-item" data-category="suv">
                    <div class="image-container">
                        <img src="C:\Users\Gigabyte\Documents\FYP\carimage\hondahrv.png" alt="Honda HR-V">
                    </div>
                    <h3>Honda HR-V 1.8 (A)</h3>
                    <div class="car-features">
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\sedan-car-front.png" alt="Car Icon">
                            <span>SUV</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\fuel.png" alt="Gasoline Icon">
                            <span>Gasoline</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\seat-belt.png" alt="Seats Icon">
                            <span>5 Seats</span>
                        </div>
                        <div class="feature-item">
                            <img src="C:\Users\Gigabyte\Documents\FYP\carimage\gear-shift.png" alt="Automatic Icon">
                            <span>Automatic</span>
                        </div>
                    </div>
                    <p>From MYR 440.00</p>
                    <button>Book Now</button>
                </div>
            </div>
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
    
        // Set default category to show all car items
        document.querySelector('.category-btn[data-category="all"]').click();

        function selectVehicle(vehicle) {
    localStorage.setItem("selectedVehicle", JSON.stringify(vehicle));
    window.location.href = "cart.html";
}
    </script>    
</body>
</html>
