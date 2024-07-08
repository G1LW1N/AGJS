<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3ededfb;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1a468c;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-header {
            padding: 20px;
            background-color: #15457e;
            text-align: center;
            width: 100%;
        }

        .sidebar-header img {
            max-width: 150px; /* Adjust based on your logo's size */
            height: auto;
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-menu li {
            width: 100%;
            border-bottom: 1px solid #15457e;
            transition: transform 0.2s ease;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            text-align: center;
        }

        .sidebar-menu li:hover {
            transform: scale(1.05);
            background-color: #3f79c0;
        }

        .sidebar-menu li a:hover {
            background-color: #3f79c0;
        }

        .sidebar-menu li a i {
            margin-right: 10px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .main-header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .main-header h1 {
            font-size: 40px;
            background: -webkit-linear-gradient(#eee, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .content {
            background-color: #E5E1DA;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
        }

        .card, .card2, .card3 {
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            flex: 1;
            transition: transform 0.2s ease;
            background-color: #fff;
            border: 2px solid; /* Add border with color defined below */
        }

        .card {
            color: #478CCF; /* Text color matching the card color */
            border-color: #478CCF; /* Border color matching the card color */
        }

        .card2 {
            color: #FF204E; /* Text color matching the card color */
            border-color: #FF204E; /* Border color matching the card color */
        }

        .card3 {
            color: #F8FF95; /* Text color matching the card color */
            border-color: #F8FF95; /* Border color matching the card color */
        }

        .card:hover, .card2:hover, .card3:hover {
            transform: scale(1.05);
        }

        .card h3, .card2 h3, .card3 h3 {
            margin: 0;
            font-size: 24px;
        }

        .card p, .card2 p, .card3 p {
            font-size: 48px;
            margin: 10px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card p i, .card2 p i {
            margin-right: 10px;
        }

        .card a, .card2 a, .card3 a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="pictures/AGJS.png" alt="Website Logo">
            </div>
            <ul class="sidebar-menu">
                <li><a href="admin.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="admin-pets.html"><i class="fas fa-paw"></i> Pets</a></li>
                <li><a href="admin-users.html"><i class="fas fa-users"></i> Users</a></li>
                <!-- <li><a href="admin-requests.html"><i class="fas fa-hourglass-half"></i> Pending Requests</a></li> -->
                <li><a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <header class="main-header">
                <h1>Welcome to the Admin Dashboard</h1>
            </header>
            <section class="content">
                <div class="card">
                    <a href="admin-users.html">
                        <h3>Total Number of Users</h3>
                        <p><i class="fas fa-user"></i><?php include 'admin-getUserCount.php'; ?></p>
                    </a>
                </div>
                <div class="card2">
                    <a href="admin-pets.html">
                        <h3>Pets Available</h3>
                        <p><i class="fas fa-paw"></i>20</p>
                    </a>
                </div>
                <!-- <div class="card3">
                    <a href="admin-requests.html">
                        <h3>Pending Requests</h3>
                        <p>3</p>
                    </a>
                </div> -->
            </section>
        </main>
    </div>
</body>
</html>
