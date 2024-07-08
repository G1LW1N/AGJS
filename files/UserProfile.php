<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.html");
    exit();
}

include "config.php";

// Fetch user data
$user_id = $_SESSION['users']['id'];

$stmt = $conn->prepare("SELECT u.name, u.email, d.birthday, d.contact_number, d.hobbies, d.image FROM users u LEFT JOIN user_details d ON u.id = d.user_id WHERE u.id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "User profile not found.";
    exit();
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="UserDashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="Mypets.php"><i class="fas fa-paw"></i> My Pets</a></li>
                <li><a href="UserProfile.php"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="Logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header class="main-header">
                <h1>My Profile</h1>
            </header>
            <div class="content">
                <div class="image-box">
                    <?php if (!empty($row['image'])): ?>
                        <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Profile Image">
                    <?php else: ?>
                        <img src="path_to_default_image.jpg" alt="Profile Image">
                    <?php endif; ?>
                </div>
                <form action="updateprofile.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">

                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" value="<?php echo htmlspecialchars($row['birthday']); ?>">

                    <label for="contact_number">Contact Number:</label>
                    <input type="text" id="contact_number" name="contact_number" value="<?php echo htmlspecialchars($row['contact_number']); ?>">

                    <label for="hobbies">Hobbies:</label>
                    <textarea id="hobbies" name="hobbies" rows="4"><?php echo htmlspecialchars($row['hobbies']); ?></textarea>

                    <label for="image">Profile Image:</label>
                    <input type="file" id="image" name="image" accept="image/*">

                    <input type="submit" value="Update Profile">
                    <input type="button" value="Cancel" onclick="window.location.href='UserProfile.php'">
                </form>
            </div>
        </main>
    </div>
</body>
</html>
