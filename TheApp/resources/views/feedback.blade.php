<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback - CAREN</title>
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
@include('header')

    <div class="feedback-hero">
        <h1>Customer Feedback</h1>
        <p>See what our customers are saying about us</p>
    </div>

    <section class="feedback-section">
        <div class="feedback-container">
            <h2>Our Happy Customers</h2>
            <div class="feedback-list">
                <!-- Sample feedback items -->
                <div class="feedback-item">
                    <img src="https://th.bing.com/th/id/OIP.HukOvx2AX47qNqZ8F0pXlwHaFF?w=800&h=550&rs=1&pid=ImgDetMain" alt="Customer Image">
                    <div class="feedback-content">
                        <h3>Great service. Will definitely book with them again.</h3>
                        <p>Kua Hock Meng</p>
                        <p>★★★★★</p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="https://th.bing.com/th/id/R.7ce13a051255d1d1975d26671798c289?rik=avFHXujPkQe2%2bA&riu=http%3a%2f%2fwww.theabaddiley.com%2fwp-content%2fuploads%2f2018%2f01%2fHarrods-Social_sh06_0453c_R_.jpg&ehk=CRrLXLFqr2pDK8u4BHGOI15rJ2GuWSXsMWt8tQbh0es%3d&risl=&pid=ImgRaw&r=0" alt="Customer Image">
                    <div class="feedback-content">
                        <h3>Extremely efficient and very professional. Highly recommended. Thx</h3>
                        <p>Miss Valerie Mogila</p>
                        <p>★★★★★</p>
                    </div>
                </div>
                <!-- Add more feedback items as needed -->
            </div>
        </div>
    </section>

    <section class="feedback-form-section">
        <div class="feedback-form-container">
            <h2>Send Us Your Feedback</h2>
            <form id="feedback-form" action="/customer/feedback" method="POST">
                @csrf
                @method('POST')
                {{-- <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div> --}}
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select id="rating" name="rating" required>
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★</option>
                        <option value="3">★★★</option>
                        <option value="2">★★</option>
                        <option value="1">★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Feedback:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </section>

@include('footer')

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
