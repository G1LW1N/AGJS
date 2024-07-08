<?php
session_start();
include 'db.php'; // Database connection file

if (isset($_POST['admin_login'])) {
    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    // Sanitize input
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the user exists in the database
    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // Directly compare the input password with the stored password
    if ($row && $password === $row['password']) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>
