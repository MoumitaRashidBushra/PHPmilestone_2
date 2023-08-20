<?php
session_start();

if (isset($_POST['login'])) {
    // In a real scenario, validate user credentials and log in the user.
    // For this example, we're assuming a successful login.
    
    $_SESSION['username'] = $_POST['username'];
    header("Location: dashboard.html");
    exit();
}


?>
