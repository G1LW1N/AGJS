<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.html");
    exit();
}

include "config.php";

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$contact_number = $_POST['contact_number'];
$hobbies = $_POST['hobbies'];
$image = $_FILES['image'];

// Handle profile image upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($image["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($image["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($image["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
        $image_path = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
        $image_path = null;
    }
}

// Update user details in the database
$stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $name, $email, $user_id);
$stmt->execute();
$stmt->close();

// Check if user details exist
$stmt = $conn->prepare("SELECT * FROM user_details WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update existing record
    if ($image_path) {
        $stmt = $conn->prepare("UPDATE user_details SET birthday = ?, contact_number = ?, hobbies = ?, image = ? WHERE user_id = ?");
        $stmt->bind_param("ssssi", $birthday, $contact_number, $hobbies, $image_path, $user_id);
    } else {
        $stmt = $conn->prepare("UPDATE user_details SET birthday = ?, contact_number = ?, hobbies = ? WHERE user_id = ?");
        $stmt->bind_param("sssi", $birthday, $contact_number, $hobbies, $user_id);
    }
} else {
    // Insert new record
    if ($image_path) {
        $stmt = $conn->prepare("INSERT INTO user_details (user_id, birthday, contact_number, hobbies, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $user_id, $birthday, $contact_number, $hobbies, $image_path);
    } else {
        $stmt = $conn->prepare("INSERT INTO user_details (user_id, birthday, contact_number, hobbies) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $birthday, $contact_number, $hobbies);
    }
}

$stmt->execute();
$stmt->close();

header("Location: UserProfile.php");
exit();
?>
