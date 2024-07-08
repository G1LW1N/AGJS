// logout.php
<?php
session_start();
session_destroy();
header("Location: homepage.html"); // Redirect to login page
exit();
?>
