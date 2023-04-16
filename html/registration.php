<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" href="/Travelling/images/travel.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <nav>
      <a href="home.php" id="logo" class="nav-black">T4life</a>
      <ul id="navlinks">
        <li><a href="home.php" class="nav-black">Home</a></li>
        <li><a href="bookings.php" class="nav-black">Browse</a></li>
        <li>
          <a href="login.html" id="current-page" class="nav-black">Login</a>
        </li>
      </ul>
    </nav>
    <hr id="nav-line" />

    <div class="container">
      <div id="title-box">
        <h1 id="logreg-title">Registration</h1>
      </div>
      <form method="POST" action="register.php">
        <label id="name"
          >name
          <input type="text" class="long-input" id="name-input" name="name" />
        </label>
        <label id="bday"
          >birthday
          <input
            type="date"
            class="long-input"
            id="bday-input"
            name="birthday"
          />
        </label>
        <label id="email"
          >email
          <input
            type="email"
            class="long-input"
            id="email-input"
            name="email"
          />
        </label>
        <label
          >username
          <input type="text" class="long-input" name="username" />
        </label>
        <label
          >password
          <input type="password" class="long-input" name="password" />
        </label>
        <div id="req"><p>requirements - </p><img src="../images/question-mark-button-svgrepo-com.png" alt="" id="qmark-icon" title="The username has to be minimum 6 characters long and it should contain at least one number.
The password should contain at least one uppercase letter and a number and it has to be minimum 8 characters long."></div>
        <div id="regbtn-box">
          <button class="form-btn" type="submit">Sign up</button>
          <button type="reset" class="form-btn">Reset</button>
          <p id="signup-text"></p>
        </div>
      </form>
    </div>
    <footer>
      <div id="socialmedia">
        <h1>Follow us on Social Media</h1>
        <p>
          Follow us on our social media pages to stay up-to-date with the latest
          travel updates, destination guides, and insider tips. Join our
          community of fellow travelers and get inspired by the incredible
          places we share.
        </p>
      </div>
      <div id="information">
        <h1>Information</h1>
        <p>
          email: t4life@supportmail.com<br />phone: +1 646 980 4741<br />address:
          Albuquerque, New-Mexico 87121, United States
        </p>
      </div>
    </footer>
  </body>
</html>
