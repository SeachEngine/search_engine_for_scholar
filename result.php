<?php
session_start();
include("connection.php");
if(isset($_GET["submit"])){
    $key=$_GET["search_key"];
    if(isset($_SESSION['name'])){
      $email=$_SESSION['email'];
      $sql="insert into history(tag,email) values('$key','$email')";
      $res=mysqli_query($con,$sql);      
    }
    $sql="SELECT * FROM articles where title like '%$key%' or tag like '%$key%' or Description like '%$key%' or link like '%$key%' or author_name like '%$key%'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_num_rows($res);
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
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
  

<?php
    echo $row." results found";
    while($result=mysqli_fetch_array($res)){
    ?>
    <div class="card">
  <h5 class="card-header"><?php echo $result['title']; ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['author_name']; ?></h5>
    <p class="card-text text-success"><?php echo $result['description']; ?></p>
    <a href=<?php  echo $result['link']; ?> class="btn btn-primary">Visit For More Details</a>
  </div>
</div>
    <?php
   
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>