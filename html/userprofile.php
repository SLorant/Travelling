<?php
  // Read the JSON file
  $json = file_get_contents('user.json');
  
  // Decode the JSON data into an associative array
  $user = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" href="/images/travel.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="../css/style.css" /> -->
    <title>User Profile</title>
    <style>
        body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
        padding: 0;
      }

      #profile {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
        max-width: 600px;
        padding: 30px;
      }

      h1 {
        color: #333;
        font-size: 28px;
        margin: 0 0 20px;
        text-align: center;
      }

      p {
        color: #666;
        font-size: 18px;
        margin: 0 0 10px;
      }

      strong {
        color: #333;
      }
    </style>
  </head>
  <body>
    <h1>User Profile</h1>
    <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
    <p><strong>Birthday:</strong> <?php echo $user['birthday']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
  </body>
</html>