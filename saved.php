<?php
session_start();
include("connection.php");
if(isset($_POST['save'])){
    $article_id=$_GET['id'];
    $email=$_SESSION['email'];
    $sql="insert into saved(article_id,email) values('$article_id','$email')";
    $res=mysqli_query($con,$sql);
    echo "<script> alert('Article Saved Successfully') </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $email=$_SESSION['email'];
        $sql="select * from articles natural join saved where email='$email'";
        $res=mysqli_query($con,$sql);
        while($result=mysqli_fetch_array($res)){
    ?>
    <div class="card">
      <h5 class="card-header">Title :<?php echo $result['title']; ?></h5>
      <div class="card-body">
        <h5 class="card-title">Author Name :<?php echo $result['author_name']; ?></h5>
        <p class="card-text text-success">Description :<?php echo $result['description']; ?></p>
        <a href=<?php  echo $result['link']; ?> class="btn btn-primary">Visit For More Details</a>
        <form action="remove.php?id=<?php echo $result['save_id'];  ?>" method="post" class="mt-2">
        <input type="submit" name="remove" value='Remove Article' id="">
        </form>
      </div>
    </div>
    <?php
        }
    ?>
</body>
</html>