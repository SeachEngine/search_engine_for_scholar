<?php
include ("connection.php");
if(isset($_POST['sub'])){
$name=$_POST['name'];
$dob=$_POST['dob'];
$mail=$_POST['email'];
$address=$_POST['add'];
$qual=$_POST['qual'];
$pass=$_POST['pass'];
$sql="insert into scholar(name,dob,email,address,qual,pass) values('$name','$dob','$mail','$address','$qual','$pass')";
$res=mysqli_query($con,$sql);  
if($res){
  echo "<script>alert('All value successfully inserted')</script>";
}else{
  echo "<script>alert(".mysqli_error($con).")</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="create-account-container">
            <h2>Sign Up</h2>
            <form class="create-accountForm-container" action="signUp.php" method="post">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="name" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required >

                <label for="address">Address:</label>
                <input type="text" id="address" name="add" required placeholder="Street, City, Country">

                <label for="qualification">Qualification:</label>
                <input type="text" id="qualification" name="qual" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>

                <input type="submit" name="sub" id="submit_button" value="Submit">
            </form>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
