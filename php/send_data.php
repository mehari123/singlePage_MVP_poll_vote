<?php
// Database connection settings for MySQL
$servername = "localhost"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password (if any)
$dbname = "brock"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Your existing code here for database connection

// Check if 'vote' is set and valid, then insert data
if (isset($_POST['vote']) && ($_POST['vote'] === 'yes' || $_POST['vote'] === 'no')) {
    $ipAddress = $_SERVER['REMOTE_ADDR']; // Fetch the user's IP address

    // Check if the IP address already exists in the votes table
    $stmt = $conn->prepare('SELECT * FROM votes WHERE ip = ?');
    $stmt->bind_param('s', $ipAddress); // Assuming IP is a string ('s' represents string)
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If the IP address exists, send a message indicating the user has already voted
        $response = array("message" => "You have already voted.");
    } else {
        // If the IP address doesn't exist, insert the new vote along with the IP
        $voteType = $_POST['vote'];

        $stmt = $conn->prepare('INSERT INTO votes (ip, types) VALUES (?, ?)');
        $stmt->bind_param('ss', $ipAddress, $voteType); // Assuming both are strings ('s' represents string)
        $stmt->execute();
        $stmt->close();

        // Send a message indicating successful voting
        $response = array("message" => "Thank you for voting!");
    }

    // Return the response as JSON to the AJAX call
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If 'vote' is not set or not valid, send an error response
    $response = array("message" => "Invalid vote");
    header('Content-Type: application/json');
    echo json_encode($response);
}

$conn->close();
