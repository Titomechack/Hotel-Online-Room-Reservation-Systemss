<?php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hotel-Online-Room-Reservation-System";

try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the INSERT statement to add a new user
    $stmt = $conn->prepare("INSERT INTO info (username, password, category, firstname, lastname, telephone, email, address) 
                            VALUES (:username, :password, :category, :firstname, :lastname, :telephone, :email, :address)");

    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $category = $_POST['category'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Bind the parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);

    // Execute the statement
    $stmt->execute();

    echo "Sign up successful. You can now log in.";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;

?>
