<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // If logged in, destroy the session data
    session_unset();
    session_destroy();
    // Redirect to the login page or any other appropriate page
    header('Location: login.php');
    exit;
} else {
    // If not logged in, redirect to the login page or any other appropriate page
    header('Location: login.php');
    exit;
}
?>