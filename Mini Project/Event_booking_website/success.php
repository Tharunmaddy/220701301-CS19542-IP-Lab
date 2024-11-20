<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4">
            <div class="card-body text-center">
                <h2 class="card-title text-success mb-4">Payment Successful!</h2>

                <div class="payment-details text-left">
                    <p><strong>Event Name:</strong> <?php echo htmlspecialchars($_POST['event_name']); ?></p>
                    <p><strong>Total Amount:</strong> ₹<?php echo htmlspecialchars($_POST['total_amount']); ?></p>
                    <p><strong>Ticket Type:</strong> <?php echo htmlspecialchars($_POST['ticket_type']); ?></p>
                    <p><strong>Quantity:</strong> <?php echo htmlspecialchars($_POST['quantity']); ?></p>
                </div>

                <!-- Return to Home Button -->
                <a href="events.php" class="btn btn-lg btn-primary mt-4">Return to Home</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
