<!-- resources/views/receipt.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details th, .details td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .details th {
            background-color: #f2f2f2;
        }
        .text-red {
            color: red;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Receipt</h1>
            <h3>To: {{$customer_name}}</h3>
            <p>Thank you for your purchase!</p>
        </div>
        <div class="details">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>{{ $price }}</td>
                </tr>
                <tr>
                    <td>Pickup Date</td>
                    <td>{{ $pickup_date }}</td>
                </tr>
                <tr>
                    <td>Return Date</td>
                    <td>{{ $return_date }}</td>
                </tr>
                <tr>
                    <td>Pickup Location</td>
                    <td>{{ $pickup_location }}</td>
                </tr>
                <tr>
                    <td>Return Location</td>
                    <td>{{ $return_location }}</td>
                </tr>
                <tr>
                    <td>Car Brand</td>
                    <td>{{ $car_brand }}</td>
                </tr>
                <tr>
                    <td>Car Model</td>
                    <td>{{ $car_model }}</td>
                </tr>
                <tr>
                    <td>Car Type</td>
                    <td>{{ $car_type }}</td>
                </tr>
                <tr>
                    <td class="bold">Total Price</td>
                    <td class="bold">RM {{ $total_price }}</td>
                </tr>
            </table>
            <h3 class="header">Thank you for using our service.</h3>
        </div>
        <div class="footer text-red">
            <p class="text-red-500">Car pickup time is after 12:00 on the pickup date</p>
            <p class="text-red-500">Car must be return before 12:00 on the return date</p>
        </div>
    </div>
</body>
</html>
