<?php
session_start();

if(!isset($_SESSION['users'])){
    header("Location: login.html");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$database = "user_management";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST['pet_id'];
    $edit_name = $_POST['edit_name'];
    $edit_age = $_POST['edit_age'];
    $edit_gender = $_POST['edit_gender'];

    // Update query
    $query = "UPDATE pets SET pet_name = ?, age = ?, gender = ?, updated_at = NOW() WHERE id = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sisi", $edit_name, $edit_age, $edit_gender, $pet_id);
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    // Redirect back to MyPets.php after update
    header("Location: MyPets.php");
    exit();
} else {
    // Handle if the request method is not POST (optional)
    echo "Invalid request method.";
}

$stmt->close();
$conn->close();
?>
