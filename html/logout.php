<?php
session_start();

// Unset the session data
unset($_SESSION['user']);

// Redirect to the login page
header('Location: login.html');
exit;
?>
