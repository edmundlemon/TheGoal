@extends('layouts.app')

@section('title', 'About us')

@section('content')
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

<style>
    /* CSS Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Navbar Styles */
.navbar {
    background-color: rgba(15, 40, 30, 0.9); /* Solid background color */
    padding: 10px 10px;
    position: fixed;
    width: 100%;
    z-index: 100;
    top: 0; /* Ensure the header stays at the top */
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

.navbar .logo:hover{
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

.hero {
    background: url('carimage/klbackgrd.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 150px 20px; /* Increased padding for a larger hero section */
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.intro {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}

.intro h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.intro p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.purpose {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 50px 20px;
    background-color: #e0f7fa;
}

.purpose-item {
    max-width: 500px;
    text-align: center;
}

.purpose-item h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.values {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}

.values h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.value-item-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
}

.value-item {
    width: 200px;
    text-align: center;
}

.value-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.value-item h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.leadership {
    text-align: center;
    padding: 50px 20px;
    background-color: #e0f7fa;
}

.leadership h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.leaders {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.leader-item {
    max-width: 200px;
    text-align: center;
}

.leader-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
}

.leader-item h3 {
    font-size: 18px;
    margin-bottom: 5px;
}

.leader-item p {
    font-size: 16px;
}

/* Footer */
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

/* Social Icons in Footer */
footer .social-icons {
    margin: 20px 0;
}

footer .social-icons a {
    color: white;
    font-size: 25px;
    margin: 0 10px;
    text-decoration: none;
}

footer .social-icons a:hover {
    color: #28a745;
}

</style>
@endsection
