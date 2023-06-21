<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <style>
        /* CSS styles for header and footer */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        /* CSS styles for room details */
        .room-details {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .room-details h2 {
            margin-bottom: 10px;
        }
        .room-details p {
            margin-bottom: 5px;
        }
        .reservation-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Online Room Reservation System</h1>
    </header>

    <div class="room-details">
        <h2>Room Details</h2>
        <?php include 'retrieve_room_details.php'; ?>
    </div>

    <footer>
        &copy; 2023 Hotel Online Room Reservation System. All rights reserved.
    </footer>
</body>
</html>
