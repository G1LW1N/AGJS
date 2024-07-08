<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.html");
    exit();
}

$fromhost = "localhost";
$fromuser = "root";
$frompassword = "";
$fromdb = "petchoices";

$fromconn = new mysqli($fromhost, $fromuser, $frompassword, $fromdb);
if ($fromconn->connect_error) {
    die("Connection failed: " . $fromconn->connect_error);
}

$cats_query = "SELECT * FROM cats";
$dogs_query = "SELECT * FROM dogs";

$cats_result = $fromconn->query($cats_query);
$dogs_result = $fromconn->query($dogs_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Pet</title>
    <link rel="stylesheet" href="choosepet.css">
</head>
<body>
    <h1>Choose a Pet</h1>
    <div class="pet-container">
        
        <?php
        if ($cats_result->num_rows > 0) {
            while ($cat = $cats_result->fetch_assoc()) {
                echo '<div class="pet-card">';
                echo '<form action="petdetails.php" method="get">';
                echo '<input type="hidden" name="id" value="' . $cat["id"] . '">';
                echo '<input type="hidden" name="type" value="cat">';
                echo '<input type="hidden" name="pet_name" value="' . $cat["name"] . '">';
                echo '<input type="hidden" name="age" value="' . $cat["age"] . '">';
                echo '<input type="hidden" name="gender" value="' . $cat["gender"] . '">';
                echo '<input type="hidden" name="image_url" value="' . $cat["image_url"] . '">';
                echo '<button type="submit" class="pet-card-content">';
                echo '<img src="' . $cat["image_url"] . '" alt="' . $cat["name"] . '">';
                echo '<h2>' . $cat["name"] . '</h2>';
                echo '</button>';
                echo '</form>';
                echo '</div>';
            }
        }

        if ($dogs_result->num_rows > 0) {
            while ($dog = $dogs_result->fetch_assoc()) {
                echo '<div class="pet-card">';
                echo '<form action="petdetails.php" method="get">';
                echo '<input type="hidden" name="id" value="' . $dog["id"] . '">';
                echo '<input type="hidden" name="type" value="dog">';
                echo '<input type="hidden" name="pet_name" value="' . $dog["name"] . '">';
                echo '<input type="hidden" name="age" value="' . $dog["age"] . '">';
                echo '<input type="hidden" name="gender" value="' . $dog["gender"] . '">';
                echo '<input type="hidden" name="image_url" value="' . $dog["image_url"] . '">';
                echo '<button type="submit" class="pet-card-content">';
                echo '<img src="' . $dog["image_url"] . '" alt="' . $dog["name"] . '">';
                echo '<h2>' . $dog["name"] . '</h2>';
                echo '</button>';
                echo '</form>';
                echo '</div>';
            }
        }

        $fromconn->close();
        ?>

    </div>
</body>
</html>
