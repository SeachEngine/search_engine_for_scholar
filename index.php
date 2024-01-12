<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>NextScholar || Home</title>
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container">
          <a class="navbar-brand text-white" href="index.php">
            <img src="./Assets/logo.png" alt="Logo" width="55" height="30">
            NextScholar
          </a>
          <ul class = "signupLoginList">
            <?php
              if(isset($_SESSION['name'])){
            ?>
            <li><a class="nav-link" href="profile.php"><?php
            echo $_SESSION['name'];
            ?>
            </a></li>
            <?php
              }else{
            ?>
            <li><a class="nav-link" href="logIn.php">Login</a></li>
            <?php
              }
            ?>
          </ul>
        </div>
    </nav>

    <form class="search_bar" action="result.php" method="get">
      <div></div>
      <div></div>
      <h1>
        Next Scholar
      </h1>
      <div>
        <input type="text" name="search_key" id=""class="input_section" required>
        <input type="submit" value="Search" name="submit" id="" class="search_button">
      </div>
      <div></div>
      <div></div>
      <div></div>
    </form>

    <footer>
      <hr>
      <div class="footer">
        <a href="index.php">Home</a>
        <a href="aboutus.html">About Us</a>
      </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>