<?php
session_start();

if (!isset($_SESSION['users'])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION['users']; 
$name = $user['name'];
$id = $user['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="boxbuttons.css">
   
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="UserDashboard.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="Mypets.php"><i class="fas fa-paw"></i> My Pets</a></li>
                <li><a href="UserProfile.php"><i class="fas fa-users"></i> My Profile</a></li>
                <li><a href="Logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header class="main-header">
                <h1 id="welcomeMessage">Welcome, <?php echo htmlspecialchars($name); ?></h1>
            </header>
            <section class="content">
                <section class="boxes">
            <div class="buttoncontainer">
            <div class="box" onclick="location.href='homepage.html';">
            <img src="pictures/homebg.png" alt="Homepage">
            <p>Homepage</p>
            </div>
            <div class="box" onclick="location.href='applicationform.php';">
            <img src="pictures/appform.png" alt="Application Forms">
            <p>Application Forms</p>
            </div>
            <div class="box" onclick="location.href='blogpost.html';">
            <img src="pictures/blogbg.png" alt="Blog Posts">
            <p>Blog Posts</p>
            </div>
            <div class="box" onclick="location.href='PetProfile.html';">
            <img src="pictures/Petprofilebg.png" alt="Pet Profiles">
            <p>Pet Profiles</p>
            </div>
          </div>
</section>
            </section>
        </main>
    </div>
</body>
</html>
