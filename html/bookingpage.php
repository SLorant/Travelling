<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="../css/bookingpage.css" />
  <link rel="icon" type="image/png" href="/images/travel.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" />
  <title>Booking</title>
</head>

<body>
  <header class="header">
    <nav>
      <a href="home.php" id="logo">T4life</a>
      <ul id="navlinks">
        <li><a href="home.php">Home</a></li>
        <li><a href="bookings.php" id="current-page">Browse</a></li>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
          echo '<li><a href="userprofile.php"  class="nav-black">' . $_SESSION['username'] . '</a></li>';
        } else {
          echo '<li><a href="login.html"  class="nav-black">Login</a></li>';
        }
        ?>
      </ul>
    </nav>
    <hr id="nav-line" />
  </header>
  <div class="main-wrapper">
    <section id="mainsection" class="main-info">
      <h1 id="header1">A random Place</h1>
      <h2 id="header2">In a random hotel</h2>
      <div id="slider" class="slider">
        <div class="slide animate">
          <img src="kepek/placeholder.jpg" id="img1" alt="firstpic" />
        </div>

        <div class="slide">
          <img src="kepek/placeholder.jpg" id="img2" alt="secondpic" />
        </div>

        <div class="slide">
          <img src="kepek/placeholder.jpg" id="img3" alt="thirdpic" />
        </div>

        <div class="slide">
          <img src="kepek/placeholder.jpg" id="img4" alt="fourthpic" />
        </div>

        <button class="btn btn-next">></button>
        <button class="btn btn-prev">&lt;</button>
      </div>
      <article>
        <h2 class="articleheader">Description</h2>
        <p class="articletext" id="article1">placeholder 1</p>
        <p class="articletext" id="article2">placeholder 2</p>
      </article>
    </section>
    <aside class="bookingbox">
      <h2 class="bookingheader">Booking info</h2>
      <div class="infogrid">
        <p class="staticinfo">Time Period</p>
        <p id="period">period</p>
        <p class="staticinfo">Hotel name</p>
        <p id="hotel">hotel</p>
        <p class="staticinfo">Price per person</p>
        <p id="price">x HUF</p>
        <p class="staticinfo">Available rooms</p>
        <p id="rooms">x Rooms</p>
      </div>
      <form method="post">
        <div>
          <label for="person-count"> How many of you are coming?</label>
          <select id="person-count" name="person-count">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <button type="submit" class="bookingbutton">Book this place!</button>
      </form>
    </aside>
  </div>
  <script src="../JS/bookingpage.js"></script>
  <script src="../JS/bookingpageslider.js"></script>
</body>

</html>