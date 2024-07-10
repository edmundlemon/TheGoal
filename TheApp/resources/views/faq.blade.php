@extends('layouts.app')

@section('title', 'FAQs')

@section('content')
    <div class="faq-hero">
        <h1>Explore FAQs</h1>
        <p>Find answers to common questions about car rentals</p>
    </div>

    <section class="faq-section">
        <div class="faq-container">
            <h2>Frequently Asked Questions</h2>
            <p>We're flattered you want to know more</p>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>What's the best way to get in touch with you?</h3>
                    <p>We'd love to hear from you. Feel free to reach out via our contact form or give us a call. We will try to get back to you in less than 24 hours. <a href="#">Learn more</a></p>
                </div>
                <div class="faq-item">
                    <h3>Where are you located?</h3>
                    <p>We are proudly located in Kuala Lumpur. <a href="#">Learn more</a></p>
                </div>
                <div class="faq-item">
                    <h3>When are you available?</h3>
                    <p>Check our business hours on the contact page. If you ever have a question outside of these hours, don't hesitate to reach out! <a href="#">Learn more</a></p>
                </div>
                <div class="faq-item">
                    <h3>What forms of payment do you accept?</h3>
                    <p>We accept all major credit cards. <a href="#">Learn more</a></p>
                </div>
                <div class="faq-item">
                    <h3>What is so special about CAREN?</h3>
                    <p>We're glad you asked! What sets us apart is our commitment to our customers and our enthusiasm for what we do. <a href="#">Learn more</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="get-in-touch">
        <div class="get-in-touch-container">
            <br><h2>Have questions or need assistance? Reach out to us for support.</h2><br>
            <a href="index2.html#contact" class="btn">GET IN TOUCH</a>
        </div><br>
    </section>
@endsection