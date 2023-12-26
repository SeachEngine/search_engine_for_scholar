<?php
session_start();
include("connection.php");
if(isset($_POST['login'])){
    $mail=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from scholar where email='$mail' and pass='$pass' limit 1";
    $res=mysqli_query($con,$sql);
    $result=mysqli_fetch_array($res);
    if(mysqli_num_rows($res)>0){
        $_SESSION['email']=$result['email'];
        $_SESSION['name']=$result['name'];
        echo "<script>alert('Welcome".$result['name']."')</script>";
        header("location:index.php");

    }else{
        echo "<script>alert('login failed')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextScholar || Login Page</title>
    <link rel="stylesheet" href="logIn.css">
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar bg-primary">
        <div class="container">
            <div class="brand">
                <a class="navbar-brand text-white" href="index.php">
                    <img src="./Assets/logo.png" alt="Logo" width="55" height="30">
                    NextScholar
                </a>
            </div>
            <ul class = "signupLoginList">
                <li><a class="nav-link" href="logIn.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-1">   
        <div class="login-container">
            <h2>Login</h2>
            <form class="login-form" action="login.php" method="post">
                <label for="username">Email:</label>
                <input type="text" id="username" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>

                <input type="submit" name="login" id="submit_button" value="Submit">
            </form>
            <div class="forgot-messege">
                <p><a href="#" onclick="forgottenPswd()">Forgot your Password?</a></p>
                <p>Don't have an account? <a href="signUp.php" onclick="accountCreation()">Signup Now</a></p>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/250d67f927.js" crossorigin="anonymous"></>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>
</html>
