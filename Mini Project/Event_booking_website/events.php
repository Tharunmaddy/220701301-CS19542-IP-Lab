<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="event.css">
    <style>
        .btn-custom {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .navbar {
            margin-bottom: 30px; /* Spacing below navbar */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Event Booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-custom" href="signup.php">Signup</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="btn btn-custom" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Upcoming Events</h2>
        
        <div class="row">
            <!-- Event Card 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="img1.jpeg" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Music Concert</h5>
                        <p class="card-text">Experience live music with top artists performing in an open arena.</p>
                        <p class="card-text"><small class="text-muted">Date: 2024-11-12</small></p>
                        <a href="event_details1.php?event_id=1" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Event Card 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="img2.jpeg" class="card-img-top" alt="Event 2">
                    <div class="card-body">
                        <h5 class="card-title">Tech Conference</h5>
                        <p class="card-text">Join the latest technology conference featuring AI and blockchain discussions.</p>
                        <p class="card-text"><small class="text-muted">Date: 2024-11-15</small></p>
                        <a href="event_details2.php?event_id=2" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Event Card 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="img3.jpeg" class="card-img-top" alt="Event 3">
                    <div class="card-body">
                        <h5 class="card-title">Food Festival</h5>
                        <p class="card-text">Savor the taste of gourmet food and street delicacies from around the world.</p>
                        <p class="card-text"><small class="text-muted">Date: 2024-11-18</small></p>
                        <a href="event_details3.php?event_id=3" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Event Card 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="img4.jpeg" class="card-img-top" alt="Event 4">
                    <div class="card-body">
                        <h5 class="card-title">Art Exhibition</h5>
                        <p class="card-text">Discover the finest artwork from emerging and renowned artists.</p>
                        <p class="card-text"><small class="text-muted">Date: 2024-11-21</small></p>
                        <a href="event_details4.php?event_id=4" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
