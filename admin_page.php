<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel-online-room-reservation-system";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement to retrieve user information
    $stmt = $conn->prepare("SELECT * FROM info");

    // Execute the query
    $stmt->execute();

    // Check if any users are found
    if ($stmt->rowCount() > 0) {
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display the user information in a table
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Category</th><th>First Name</th><th>Last Name</th><th>Telephone</th><th>Email</th></tr>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['username'] . "</td>";
            echo "<td>" . $user['password'] . "</td>";
            echo "<td>" . $user['category'] . "</td>";
            echo "<td>" . $user['firstname'] . "</td>";
            echo "<td>" . $user['lastname'] . "</td>";
            echo "<td>" . $user['telephone'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="retrieve_reservations.php">Checking the result of reseved room</a>
</body>
</html>