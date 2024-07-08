<?php
session_start();

// Check if the user is already logged in, if yes then redirect them to dashboard
if (isset($_SESSION['users'])) {
    header("Location: UserDashboard.php");
    exit;
}

require_once "config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_email = $_POST['username_email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username_email, $username_email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $name, $email, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a new session
            $_SESSION['users'] = [
                'id' => $id,
                'name' => $name,
                'email' => $email
            ];

            // Redirect to user dashboard
            header("Location: UserDashboard.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username or email.";
    }

    $stmt->close();
}

$conn->close();
?>
