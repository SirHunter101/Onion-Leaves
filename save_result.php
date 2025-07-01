
<?php
$host = 'localhost';
$db = 'onion_disease_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("INSERT INTO history (image, disease, confidence, description, prescription, mitigation) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssdsss",
    $data['image'],
    $data['disease'],
    $data['confidence'],
    $data['description'],
    $data['prescription'],
    $data['mitigation']
);

$stmt->execute();
$stmt->close();
$conn->close();
echo json_encode(["status" => "success"]);
?>
