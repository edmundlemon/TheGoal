<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Request Form</title>
    <link rel="stylesheet" href="{{ asset('css/reserve.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('header')

    <main>
        <section class="form-section">
            <h1>Meeting Request Form</h1><br>
            <h2>We look forward to meeting with you. </h2>
            <p>To schedule an appointment, pick a time that works for you and share your contact information. After you
                submit the form, check your email for an appointment confirmation.</p>
            <form id="meeting-form" action="/inquiries" method="POST">
                @csrf
                @method('POST')
                <label for="date">Select a date and time *</label>
                <input type="date" id="date-picker" name="date" value="{{ old('date') }}" required>
                @error('date')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror


                <label for="time">Select a time slot *</label>
                <select class="h-12 border border-gray-300 rounded-md pl-2" id="time-slot" name="time"
                    value="{{ old('time') }}" required>
                    <option value="" disabled selected>Select a time slot</option>
                    <option value="09:00">9:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">1:00 PM</option>
                    <option value="14:00">2:00 PM</option>
                    <option value="15:00">3:00 PM</option>
                    <option value="16:00">4:00 PM</option>
                    <option value="17:00">5:00 PM</option>
                </select>
                @error('time')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

                <label for="name">Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

                <label for="email">Email address *</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

                <label for="phone">Phone number *</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"required>
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

                <label for="services">Which service or services are you interested in?</label>
                <div class="services">
                    <select name="services" id="service" value="{{ old('services') }}">
                        <option value="Car Rental">Car Rental</option>
                        <option value="Airport Transfer">Airport Transfer</option>
                        {{-- <option value="Chauffeur Service">Chauffeur Service</option> --}}
                        <option value="Long-Term Rental">Long-Term Rental</option>
                        <option value="Event Transportation">Event Transportation</option>
                        <option value="Self-Drive Adventures">Self-Drive Adventures</option>
                    </select>
                    @error('services')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                    {{-- <input type="checkbox" id="car-rental" name="services" value="Car rental">
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
                    <label for="self-drive">Self-Drive adventures</label> --}}
                </div>

                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <script></script>
</body>

</html>
