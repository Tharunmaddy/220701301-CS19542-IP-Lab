<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tickets</title>
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
        .ticket-option {
            border: 1px solid #007bff; /* Border color */
            padding: 20px;
            margin: 15px; /* Space around each option */
            border-radius: 10px; /* Rounded corners */
            text-align: center;
            background-color: #e9ecef; /* Light grey background */
            transition: background-color 0.3s, transform 0.3s;
        }
        .ticket-option:hover {
            background-color: #d0e0f0; /* Hover effect */
            transform: translateY(-5px); /* Slight lift on hover */
        }
        .ticket-option h4 {
            margin-bottom: 10px;
        }
        .btn-proceed {
            margin-top: 30px; /* Space above button */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Select Your Ticket</h2>

        <form action="payment.php" method="POST" onsubmit="return calculateTotal();">
            <div class="row text-center">
                <!-- Economy Ticket -->
                <div class="col-md-2 ticket-option">
                    <h4>Economy</h4>
                    <p>₹500</p>
                    <input type="radio" name="ticket_type" value="economy" data-price="500" required> Select
                </div>

                <!-- Silver Ticket -->
                <div class="col-md-2 ticket-option">
                    <h4>Silver</h4>
                    <p>₹1000</p>
                    <input type="radio" name="ticket_type" value="silver" data-price="1000" required> Select
                </div>

                <!-- Gold Ticket -->
                <div class="col-md-2 ticket-option">
                    <h4>Gold</h4>
                    <p>₹2000</p>
                    <input type="radio" name="ticket_type" value="gold" data-price="2000" required> Select
                </div>

                <!-- Diamond Ticket -->
                <div class="col-md-2 ticket-option">
                    <h4>Diamond</h4>
                    <p>₹3000</p>
                    <input type="radio" name="ticket_type" value="diamond" data-price="3000" required> Select
                </div>

                <!-- VIP Ticket -->
                <div class="col-md-2 ticket-option">
                    <h4>VIP</h4>
                    <p>₹5000</p>
                    <input type="radio" name="ticket_type" value="vip" data-price="5000" required> Select
                </div>
            </div>

            <!-- Quantity Selection -->
            <div class="form-group mt-4">
                <label for="ticketQuantity">Select Quantity</label>
                <input type="number" class="form-control" id="ticketQuantity" name="quantity" min="1" max="10" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-proceed">Proceed to Payment</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function calculateTotal() {
            const ticketType = document.querySelector('input[name="ticket_type"]:checked');
            const quantity = document.getElementById('ticketQuantity').value;

            if (!ticketType || quantity <= 0) {
                alert("Please select a ticket type and quantity.");
                return false; // Prevent form submission
            }

            const pricePerTicket = parseInt(ticketType.getAttribute('data-price'));
            const totalAmount = pricePerTicket * quantity;

            // Create hidden input fields for payment.php
            const form = event.target;
            const eventName = "Your Event Name Here"; // Change this to dynamically fetch event name if needed

            // Set form action to payment.php with event details
            form.action = `payment.php?event_name=${encodeURIComponent(eventName)}&total_amount=${totalAmount}&ticket_type=${ticketType.value}&quantity=${quantity}`;

            return true; // Allow form submission
        }
    </script>
</body>
</html>
