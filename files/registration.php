<?php
session_start();

// Redirect logged-in users to dashboard
if (isset($_SESSION['users'])) {
    header("Location: UserDashboard.php");
    exit();
}


require_once "config.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // Validate password match
    if ($password != $confirmpassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $username, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        $_SESSION['registration_success'] = true; // Optional: set a flag to show registration success message on login page
        header("Location: login.html");
        exit();
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

