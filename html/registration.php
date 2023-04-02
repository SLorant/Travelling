<?php
$file = 'users.json';
$data = file_get_contents($file);
$users = json_decode($data, true);

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Update the user data with the values from the form
  $name = $_POST['name'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Create new user object
  $user = [
    'name' => $name,
    'birthday' => $birthday,
    'email' => $email,
    'username' => $username,
    'password' => $hashedPassword
  ];

  // Add new user to array
  $users[] = $user;

  // Save updated user data to JSON file
  $json = json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  file_put_contents($file, $json);

  // Redirect to user profile page
  header('Location: home.php');
  exit;
}
?>