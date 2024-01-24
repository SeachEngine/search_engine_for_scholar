<?php
session_start();
include("connection.php");
if(!isset($_SESSION['name'])){
    header("location:index.php");
  }
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $add=$_POST['add'];
    $quali=$_POST['quali'];
    $email=$_SESSION['email'];
    $sql="update scholar set name='$name', dob='$dob', address='$add', qual='$quali' where email='$email'";
    $res=mysqli_query($con,$sql);
    if(!$res){
        echo "<script> alert('Something went wrong'); </script>";
        // header("location:changePassword.php");
    }else{
        echo "<script> alert('Update Details Successfully.'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details || NextScholar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .account_div p label{
            color:black;
        }
    </style>
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
            <p class="header">Update Details</p>
            <?php
                $email=$_SESSION['email'];
                $sql="select * from scholar where email='$email'";
                $res=mysqli_query($con,$sql);
                $result=mysqli_fetch_array($res);
              
            ?>
            <form action="updateProfile.php" method="post">
                <p>
                    <label>Name: <input type="text" name="name"  class="pas_input" placeholder="Enter New Name" value="<?php  echo $result['name']; ?>"></label>
                </p>
                <p>
                    <label>New DOB: <input type="date" name="dob"  class="pas_input" value="<?php  echo $result['dob']; ?>"></label>
                </p>
                <p>
                    <label>Address: <input type="text" name="add"  class="pas_input" placeholder="Enter New Address" value="<?php  echo $result['address']; ?>"></label>
                </p>
                <p>
                    <label>Qualification: <input type="text" name="quali"  class="pas_input" placeholder="Enter New Qualification" value="<?php  echo $result['qual']; ?>"></label>
                </p>
                
                <p class="logout_btn"><input type="submit" value="Update" name="submit" ></p>
            </form>
         

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>