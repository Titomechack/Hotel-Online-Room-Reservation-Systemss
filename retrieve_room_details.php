<!DOCTYPE html>
<html>
<head>
    <title>Make Reservation</title>
    <style>
        /* CSS styles for header and form */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .reservation-form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .reservation-form h2 {
            margin-bottom: 10px;
        }
        .reservation-form label {
            display: block;
            margin-bottom: 5px;
        }
        .reservation-form input[type="text"],
        .reservation-form input[type="email"],
        .reservation-form select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .reservation-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <div class="reservation-form">
        <h2>Make a Reservation</h2>
        <form action="make_reservation.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="room">Room Category:</label>
            <select id="room" name="room" required>
                <option value="upperroom">Upper Room</option>
                <option value="mediumroom">Medium Room</option>
                <option value="lowroom">Low Room</option>
            </select>

            <label for="number">Number of Rooms:</label>
            <input type="number" id="number" name="number" min="1" required>
            <label for="">Date in</label>
            <input type="date" name=date_in>
            <label for="">Date out</label>
            <input type="date" name=date_in><br><br>
            <button type="submit">Make Reservation</button>
        </form>
    </div>
</body>
</html>
