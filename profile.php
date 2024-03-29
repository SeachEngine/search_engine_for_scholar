<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Details</title>
    <link rel="stylesheet" href="style.css">
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
            <li><a class="nav-link" href="profile.php"> <?php
              echo $_SESSION['name'];
            ?></a></li>
            <li><a class="nav-link" href="history.php">History</a></li>
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="saved.php">Saved Article</a></li>
            <li><a class="nav-link" href="article.php">My Articles</a></li>
          </ul>
        </div>
    </nav>
    
    <div class="profile_div">
        <div class="account_div">
            <p class="header">User Account Details</p>
            <p><img src="./Assets/logo.png" alt="" id="profile_pic"></p>
            <p>Name: 


            <?php
              echo $_SESSION['name'];
            ?>
            </p>
            <p>Email: <?php
            echo $_SESSION['email'];
            ?></p>
            <p><a href="changePassword.php">Change Password</a></p>
            <p class="logout_btn">
            <a href="logout.php">
            <input type="submit" value="Log Out" name="submit" >
            </a>    
            
            <p><a href="updateProfile.php">Update Profile</a></p>
          </p>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>