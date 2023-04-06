<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $file = 'users.json';
  $data = file_get_contents($file);
  $users = json_decode($data, true);

  $username = $_POST['username'];
  $password = $_POST['password'];

  foreach ($users as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user;
      $_SESSION['username'] = $username;
      if (isset($_COOKIE['username'])) {
        session_start();
        header('Location: userprofile.php');
        exit;
      }
      setcookie('username', $username, time() + (30 * 24 * 60 * 60));

      header('Location: userprofile.php');
      exit;
    }
  }
  $errorMessage = 'Invalid username or password';
}

?>