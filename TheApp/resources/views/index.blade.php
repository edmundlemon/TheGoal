@extends('layouts.app')

@section('title', 'CAREN')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @include('header')
    <div class="hero" id="hero"
    style="background-image: url('{{ asset('images/carimage/Car-Hire-bg.jpg') }}');"
    >
        <h1 class="text-white">CAREN</h1>
        <p  class="text-black">Your Ultimate Car Rental Experience</p>
        <a href="/menu" class="cta-button">View Services</a>
    </div>

    <section class="discover">
        <div class="discover-content flex justify-center items-center flex-col">
            <h2 class="my-4 text-3xl font-bold whitespace-nowrap">Explore the vibrant city of Kuala Lumpur with CAREN car rental</h2>
            <p>CAREN Car Rental offers a wide range of vehicles for your convenience, whether you're a tourist exploring
                the city or a local running errands. Our hassle-free booking process and top-notch customer service
                ensure a smooth experience. Discover Kuala Lumpur with CAREN today!</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </div>
    </section>

    <section id="services">
        <h2 class="my-4 text-3xl font-bold">Efficient and reliable car rental solutions</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="{{ asset('images/carimage/background-klcc.jpg') }}" alt="Car Rental">
                <h3>Car rental</h3>
                <p>Rent a car and explore the city at your own pace.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/carimage/airport-transfer-bg.jpg') }}" alt="Airport Transfer">
                <h3>Airport transfer</h3>
                <p>Arrive in style and comfort with our airport transfer service.</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('images/carimage/longterm bg.webp') }}" alt="Long-Term Rental">
                <h3>Long-Term rental</h3>
                <p>Explore Kuala Lumpur for an extended period with our long-term rental option.</p>
            </div>
        </div>
        <div class="flex flex-row space-x-3 justify-center mt-3">
            <div class="service-item">
                <img src="{{ asset('images/carimage/event-transport bg.webp') }}" alt="Event Transportation">
                <h3>Event transportation</h3>
                <p>Arrive at your event in style with our premium transportation service.</p>
            </div>
            <div class="service-item ">
                <img src="{{ asset('images/carimage/selfdrive bg.jpeg') }}" alt="Self-Drive Adventures">
                <h3>Self-Drive adventures</h3>
                <p>Embark on a thrilling self-drive adventure in Kuala Lumpur.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact-container">

            <div class="contact-details flex flex-col items-center justify-center">
                <h2 class="my-4 text-3xl font-bold">Get in touch</h2>
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
@endsection

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
