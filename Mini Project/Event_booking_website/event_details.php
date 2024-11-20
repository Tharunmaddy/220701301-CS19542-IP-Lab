<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="event.css">
</head>
<body>

<?php
    include "database.php";
    $event_id = $_GET['event_id'];  // Get event ID from query string

    $sql = "SELECT * FROM events WHERE event_id = $event_id";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="path/to/<?php echo $event['image']; ?>" class="img-fluid" alt="<?php echo $event['event_name']; ?>">
            </div>
            <div class="col-md-6">
                <h2><?php echo $event['event_name']; ?></h2>
                <p><?php echo $event['event_description']; ?></p>
                <p><strong>Date:</strong> <?php echo $event['event_date']; ?></p>
                <p><strong>Time:</strong> <?php echo $event['event_time']; ?></p>
                <p><strong>Venue:</strong> <?php echo $event['venue']; ?></p>
                <p><strong>Price Range:</strong> ₹<?php echo $event['min_price']; ?> - ₹<?php echo $event['max_price']; ?></p>
                <a href="book_tickets.php?event_id=<?php echo $event['event_id']; ?>" class="btn btn-primary">Book Tickets</a>
            </div>
        </div>
    </div>

<?php
    } else {
        echo "<p>Event not found.</p>";
    }

    $db->close();
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>