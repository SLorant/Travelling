<?php
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $file = 'users.json';
  $data = file_get_contents($file);
  $users = json_decode($data, true);

  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Find the user in the array
  foreach ($users as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
      // Save the user data in the session
      $_SESSION['user'] = $user;
      $_SESSION['username'] = $username; // $username is the logged-in user's username
      if (isset($_COOKIE['username'])) {
        session_start();
        $_SESSION['username'] = $_COOKIE['username'];
        header('Location: userprofile.php');
        exit;
      }
      setcookie('username', $username, time() + (30 * 24 * 60 * 60)); // $username is the logged-in user's username

      // Redirect to the user profile page
      header('Location: userprofile.php');
      exit;
    }
  }

  // If the user is not found, show an error message
  $errorMessage = 'Invalid username or password';
}

?>