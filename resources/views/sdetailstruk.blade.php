<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Zzf Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            <h1>Rental Receipt</h1>
            <p>ZZF Industry Indonesia</p>
        </div>
        <div class="details">
        <p><strong>Payment No:</strong> {{ $sewaDetails->id }}</p>
        <p>Seller Name: {{ $sewaDetails->seller_name }}</p>
        <p>Product Name: {{ $sewaDetails->product_seller_name }}</p>
        <p>Quantity: {{ $sewaDetails->quantity }}</p>
        <p>Subtotal: {{ $sewaDetails->subtotal }}</p>
        </div>
        <div class="footer">
            <p>Silahkan melakukan konfirmasi dengan menunjukan struk pembayaran ini kepada tim kami!</p>
        </div>
        <div class="footer">
            <p>Thank you for your rental and payments!</p>
        </div>
        <div class="footer">
            <p>Happy Rentals! PT ZZF Indusry Indonesia</p>
        </div>
    </div>
</body>
</html>
