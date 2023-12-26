<?php
session_start();
include("connection.php");
if(!isset($_SESSION['name'])){
  header("location:index.php");
}else{
    $email=$_SESSION['email'];
    $sql="select * from history where email='$email' order by time desc";
    $res=mysqli_query($con,$sql);
    
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
            <li><a class="nav-link" href="index.php">Home</a></li>
          </ul>
        </div>
    </nav>
    <table class="table table-primary table-striped-columns">
    <thead>
      <tr>
        <th>Tag</th>
        <th>Timestamp</th>
      </tr>  
    </thead>
    <tbody>
    <?php
    while($result=mysqli_fetch_array($res)){
    ?>
   <tr>
    <td>
        <?php
        echo $result['tag'];
        ?>

    </td>
    <td>
    <?php
        echo $result['time'];
        ?>
    </td>
   </tr>
    <?php
        }
    ?>
    </tbody>
    
    </table>
<?php
    
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>