<?php
session_start();
include("connection.php");
if(!isset($_SESSION['name'])){
    header("location:index.php");
  }
if(isset($_POST['submit'])){
    $current=$_POST['cur_pas'];
    $new=$_POST['new_pas'];
    $email=$_SESSION['email'];
    $sql="select * from scholar where email='$email' and pass='$current'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)==0){
        echo "<script> alert('current password not matched'); </script>";
        // header("location:changePassword.php");
    }else{
    $sql="update scholar set pass='$new' where email='$email'";
    $res=mysqli_query($con,$sql);
    if($res){
        echo "<script> alert('password changes'); </script>";
        // header("location:profile.php");
    }else{
        echo "<script> alert('password not changed');".mysqli_error($con)." </script>";
        header("location:changePassword.php");
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            <li><a class="nav-link" href="profile.php">

            <?php
                echo $_SESSION['name'];
            ?>

            </a></li>
          </ul>
        </div>
    </nav>
    
    <div class="profile_div">
        <div class="account_div">
            <p class="header">Change Password</p>
            <form action="changePassword.php" method="post">
            <p>
                <label for="cur_pas" class="label">Current Password:</label>
                <input type="Password" name="cur_pas"  class="pas_input">
            </p>
            <p>
                <label for="new_pas" class="label">New Password</label>
                <input type="password" name="new_pas"  class="pas_input">
            </p>
            <p class="logout_btn"><input type="submit" value="Change Password" name="submit" ></p>
            </form>
         

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>