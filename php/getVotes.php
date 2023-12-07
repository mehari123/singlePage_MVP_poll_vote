<?php
// Database connection settings for MySQL
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual password
$dbname = "brock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the counts for types 'yes' and 'no'
$result_yes = $conn->query('SELECT COUNT(*) AS yes_count FROM votes WHERE types = "yes"');
$result_no = $conn->query('SELECT COUNT(*) AS no_count FROM votes WHERE types = "no"');

// Check if queries executed successfully
if (!$result_yes || !$result_no) {
    echo json_encode(['error' => 'Failed to fetch votes']);
    exit();
}

// Prepare the data to send as JSON
$data = [
    'yesVotes' => $result_yes->fetch_assoc()['yes_count'] ?? 0,
    'noVotes' => $result_no->fetch_assoc()['no_count'] ?? 0
];

// Set the header to indicate JSON content
header('Content-Type: application/json');

// Output the data as JSON
echo json_encode($data);

// Close connection
$conn->close();
?>
