
<?php

class User
{
    private $username;
    private $password;
    private $category;

    public function __construct($username, $password, $category)
    {
        $this->username = $username;
        $this->password = $password;
        $this->category = $category;
    }

    public function authenticate()
    {
        // Assuming you have established a database connection
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hotel-online-room-reservation-system";

        // Create connection
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       else {
            // Prepare and execute SQL statement to check login credentials
            $stmt = $conn->prepare("SELECT * FROM info WHERE username = ? AND password = ? AND category = ?");
            if ($stmt === false) {
                die("Error in preparing statement: " . $conn->error);
            }

            $stmt->bind_param("sss", $this->username, $this->password, $this->category);
            $stmt->execute();

            // Fetch the result
            $result = $stmt->get_result();

            // Close the prepared statement and database connection
            $stmt->close();
            $conn->close();

            // Return true if the login credentials match, false otherwise
            return $result->num_rows > 0;
        }
    }

    public function redirect()
    {
        if ($this->category === "Admin") {
            header("Location: admin_page.php");
            exit();
        } else if ($this->category === "guest") {
            header("Location: guest_page.php");
            exit();
        }else {
            echo "Invalid category";
        }
    }
}

// Usage example

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have retrieved the username, password, and category from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $category = $_POST['category'];

    $user = new User($username, $password, $category);

    if ($user->authenticate()) {
        $_SESSION['username'] = $username;
        $user->redirect();
    } else {
        echo "Authentication failed";
    }
}

?>
