<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit;
}
// Get the user data from the session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="../css/bookingpage.css" />
  <link rel="stylesheet" href="../css/userprofile.css" />
  <link rel="icon" type="image/png" href="/images/travel.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" />

  <title>User Profile</title>
</head>

<body>
  <header class="header">
    <nav>
      <a href="home.php" id="logo">T4life</a>
      <ul id="navlinks">
        <li><a href="home.php">Home</a></li>
        <li><a href="bookings.php">Browse</a></li>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<li><a href="userprofile.php" id="current-page" class="nav-black">' . $_SESSION['username'] . '</a></li>';
        } else {
          echo '<li><a href="login.html" id="current-page" class="nav-black">Login</a></li>';
        }
        ?>
      </ul>
    </nav>
    <hr id="nav-line" />
  </header>


  <div class="bookingbox">
    <h2 class="bookingheader">User Profile</h2>
    <div class="infogrid">
      <p class="staticinfo"> <strong>Username</strong> </p>
      <p id="period">
        <?php echo $user['username']; ?>
      </p>
      <p class="staticinfo"> <strong>Name</strong> </p>
      <p id="hotel">
        <?php echo $user['name']; ?>
      </p>
      <p class="staticinfo"> <strong>Email</strong> </p>
      <p id="price">
        <?php echo $user['email']; ?>
      </p>
      <p class="staticinfo">
        <strong>Birthday</strong>
      </p>
      <p id="rooms">
        <?php echo $user['birthday']; ?>
      </p>

    </div>
    <a class="logout" href="logout.php">Logout</a>
  </div>
</body>

</html>