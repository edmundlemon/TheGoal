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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Receipt</h1>
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
                    <td>Start Date</td>
                    <td>{{ $start_date }}</td>
                </tr>
                <tr>
                    <td>End Date</td>
                    <td>{{ $end_date }}</td>
                </tr>
                <tr>
                    <td>Car Type</td>
                    <td>{{ $car_type }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Generated on {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
        </div>
    </div>
</body>
</html>
