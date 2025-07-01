<?php
// Include the database connection
require 'db_connection.php';

// Query to fetch all history records
$result = $conn->query("SELECT * FROM history ORDER BY timestamp DESC");

$data = [];

// Loop through the result set and add each record to the array
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "id" => $row['id'],
        "image" => $row['image'], // base64 image string
        "disease" => $row['disease'],
        "confidence" => $row['confidence'],
        "description" => $row['description'],
        "prescription" => $row['prescription'],
        "mitigation" => $row['mitigation'],
        "timestamp" => $row['timestamp']
    ];
}

// Return as JSON
echo json_encode($data);

// Close the database connection
$conn->close();
?>
