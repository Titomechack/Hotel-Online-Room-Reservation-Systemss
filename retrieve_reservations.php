<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel-online-room-reservation-system";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement to retrieve reservation information
    $stmt = $conn->prepare("SELECT * FROM make_reservation");

    // Execute the query
    $stmt->execute();

    // Check if any reservations are found
    if ($stmt->rowCount() > 0) {
        $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display the reservation information in a table
        echo "<table>";
        echo "<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Room</th><th>Date In</th><th>Date Out</th></tr>";
        foreach ($reservations as $reservation) {
            echo "<tr>";
            echo "<td>" . $reservation['id'] . "</td>";
            echo "<td>" . $reservation['fullname'] . "</td>";
            echo "<td>" . $reservation['email'] . "</td>";
            echo "<td>" . $reservation['room'] . "</td>";
            echo "<td>" . $reservation['date_in'] . "</td>";
            echo "<td>" . $reservation['date_out'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No reservations found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
