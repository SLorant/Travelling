<?php
$file = 'users.json';
$data = file_get_contents($file);
$users = json_decode($data, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $user = [
    'name' => $name,
    'birthday' => $birthday,
    'email' => $email,
    'username' => $username,
    'password' => $hashedPassword,
  ];

  $users[] = $user;

  $json = json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  file_put_contents($file, $json);

  header('Location: login.html');
  exit;
}
?>