<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Validate and sanitize input parameters
    $pet_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $pet_type = filter_var($_GET['type'], FILTER_SANITIZE_STRING);
    $pet_name = filter_var($_GET['pet_name'], FILTER_SANITIZE_STRING);
    $pet_age = filter_var($_GET['age'], FILTER_SANITIZE_STRING);
    $pet_gender = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);
    $pet_image = filter_var($_GET['image_url'], FILTER_SANITIZE_URL); // Assuming image_url is a URL

    if ($pet_id === false || $pet_type === false || $pet_name === false || $pet_age === false || $pet_gender === false || $pet_image === false) {
        die("Invalid input parameters.");
    }

    // Database connection parameters for user_management database
    $tohost = "localhost";
    $touser = "root";
    $topassword = "";
    $todatabase = "user_management";

    // Create database connection
    $toconn = new mysqli($tohost, $touser, $topassword, $todatabase);
    if ($toconn->connect_error) {
        die("Connection failed: " . $toconn->connect_error);
    }

    // Prepare statement to insert selected pet into pets table
    $insert_query = "INSERT INTO pets (userid, pet_name, cat_dog_id, age, gender, image_url, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())";
    $stmt = $toconn->prepare($insert_query);
    if (!$stmt) {
        die("Prepare failed: " . $toconn->error);
    }

    // Bind parameters and execute insertion
    $user_id = $_SESSION['users']['id'];
    $cat_dog_id = $pet_id; // Assuming cat and dog IDs are used directly

    $stmt->bind_param("isisss", $user_id, $pet_name, $cat_dog_id, $pet_age, $pet_gender, $pet_image);
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    // Close statement and database connection
    $stmt->close();
    $toconn->close();

    // Redirect to MyPets.php or another appropriate page after successful insertion
    header("Location: MyPets.php");
    exit();
} else {
    // Handle if the request method is not GET (optional)
    echo "Invalid request method.";
}
?>
