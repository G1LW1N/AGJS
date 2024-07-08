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

$user_id = $_SESSION['users']['id'];

$query = "SELECT * FROM pets WHERE userid = ?";
$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $user_id);
if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        .pets-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .pet-card {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
        }
        .pet-card img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
            border-radius: 50%;
        }
        .pet-details {
            flex: 1;
        }
        .pet-details h2 {
            margin-bottom: 5px;
        }
        .pet-details p {
            margin: 0;
            color: #666;
        }
        .edit-form {
            display: none; /* Hide edit forms by default */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="UserDashboard.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="MyPets.php"><i class="fas fa-paw"></i> My Pets</a></li>
                <li><a href="UserProfile.php"><i class="fas fa-users"></i> My Profile</a></li>
                <li><a href="Logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header class="main-header">
                <h1>My Pets</h1>
            </header>
            <section class="content">
                <div class="pets-container">
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="pet-card">';
                            echo '<img src="' . $row["image_url"] . '" alt="' . $row["pet_name"] . '">';
                            echo '<div class="pet-details">';
                            echo '<h2>' . $row["pet_name"] . '</h2>';
                            echo '<p>Age: ' . $row["age"] . '</p>';
                            echo '<p>Gender: ' . $row["gender"] . '</p>';
                            echo '<button onclick="showEditForm(' . $row["id"] . ')">Edit</button>';
                            echo '<form class="edit-form" id="editForm_' . $row["id"] . '" action="updatepet.php" method="post">';
                            echo '<input type="hidden" name="pet_id" value="' . $row["id"] . '">';
                            echo '<label for="editName_' . $row["id"] . '">Name:</label>';
                            echo '<input type="text" id="editName_' . $row["id"] . '" name="edit_name" value="' . $row["pet_name"] . '">';
                            echo '<label for="editAge_' . $row["id"] . '">Age:</label>';
                            echo '<input type="text" id="editAge_' . $row["id"] . '" name="edit_age" value="' . $row["age"] . '">';
                            echo '<label for="editGender_' . $row["id"] . '">Gender:</label>';
                            echo '<input type="text" id="editGender_' . $row["id"] . '" name="edit_gender" value="' . $row["gender"] . '">';
                            echo '<button type="submit">Save</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No pets found.</p>';
                    }

                    $stmt->close();
                    $conn->close();
                    ?>
                </div>
            </section>
        </main>
    </div>

    <script>
        function showEditForm(petId) {
            var editForm = document.getElementById('editForm_' + petId);
            editForm.style.display = 'block';
        }
    </script>
</body>
</html>