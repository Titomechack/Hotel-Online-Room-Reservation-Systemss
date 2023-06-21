<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel-online-room-reservation-system";

class Reservation
{
    private $conn;

    public function __construct($servername, $username, $password, $database)
    {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function makeReservation($fullname, $email, $room, $number)
    {
        try {
            // Prepare the SQL statement to insert a reservation
            $stmt = $this->conn->prepare("INSERT INTO make_reservation (fullname, email, room, number) VALUES (:fullname, :email, :room, :number)");

            // Bind the parameters
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':room', $room);
            $stmt->bindParam(':number', $number);

            // Execute the query
            $stmt->execute();

            echo "Reservation made successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservation = new Reservation($servername, $username, $password, $database);

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    $number = $_POST['number'];

    $reservation->makeReservation($fullname, $email, $room, $number);
}
?>
