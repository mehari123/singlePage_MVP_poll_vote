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

// Create the 'votes' table if it doesn't exist
// $sql = "CREATE TABLE IF NOT EXISTS votes (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     ip_address VARCHAR(255),
//     vote_type VARCHAR(3)
// )";
// if ($conn->query($sql) !== TRUE) {
//     echo "Error creating table: " . $conn->error;
// }

// Check if 'vote' is set and valid, then insert data
if (isset($_POST['vote']) && ($_POST['vote'] === 'yes' || $_POST['vote'] === 'no')) {
    $ipAddress = $_POST['ip_address']; // Assuming the IP address is sent via POST
    $voteType = $_POST['vote'];

    // Prepare and execute the SQL statement to insert the vote along with IP
    $stmt = $conn->prepare('INSERT INTO votes (ip, types) VALUES (?, ?)');
    $stmt->bind_param('ss', $ipAddress, $voteType); // Assuming both are strings ('s' represents string)
    $stmt->execute();
    $stmt->close();
}

$conn->close();
