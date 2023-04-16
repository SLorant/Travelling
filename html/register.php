<?php
session_start();
$file = 'users.json';
$data = file_get_contents($file);
$users = json_decode($data, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($name) && !empty($birthday) && !empty($email) && !empty($username) && !empty($password)){
  $userExist = false;
  //$_SESSION['uexist'] = "";
  foreach ($users as $user) {
    if ($user['username'] === $username){
      $userExist = true;
      //$_SESSION['uexist'] = "This username is already in use.";
    }
  }

  $usernamePattern = '/^(?=.*\d)[a-zA-Z\d]{6,}$/';
  $passwordPattern = '/^(?=.*\d)(?=.*[A-Z])[a-zA-Z\d]{8,}$/';
  $usernamePass = false;
  $passwordPass = false;

  if(preg_match($usernamePattern, $username)){
    $usernamePass=true;
    //$_SESSION['uerror'] = "";
  }
  else{
    //$_SESSION['uerror'] = "The username is incorrect.";
  }

  if(preg_match($passwordPattern, $password)) {
    $passwordPass = true;
    //$_SESSION['passwordError'] = "";
} 
else {
  //$_SESSION['passwordError'] = "Password is invalid.";
}
 if(!$userExist && $usernamePass && $passwordPass){
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
 else{
  header('Location: registration.php');
    exit;
 }

  }
  else{
    header('Location: registration.php');
    exit;
  }
  
}
?>