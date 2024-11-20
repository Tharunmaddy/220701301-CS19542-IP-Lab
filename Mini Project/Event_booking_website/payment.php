<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="event.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
        }
        .container {
            margin-top: 50px; /* Spacing above container */
            padding: 20px;
            background-color: #fff; /* White background for form */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-submit {
            margin-top: 20px; /* Space above button */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Payment</h2>

        <form action="success.php" method="POST">
            <div class="form-group">
                <label for="cardName">Cardholder Name</label>
                <input type="text" class="form-control" id="cardName" name="card_name" required>
            </div>
            <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="expiryDate">Expiry Date (MM/YY)</label>
                <input type="text" class="form-control" id="expiryDate" name="expiry_date" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <input type="hidden" name="event_name" value="<?php echo htmlspecialchars($_GET['event_name']); ?>">
            <input type="hidden" name="total_amount" value="<?php echo htmlspecialchars($_GET['total_amount']); ?>">
            <input type="hidden" name="ticket_type" value="<?php echo htmlspecialchars($_GET['ticket_type']); ?>">
            <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($_GET['quantity']); ?>">

            <button type="submit" class="btn btn-primary btn-block btn-submit">Make Payment</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
