<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location:index.php");
}
include("connection.php");
$email=$_SESSION['email'];
if(isset($_POST['sub'])){
$title=$_POST["pep"];
$tag=$_POST["tag"];
$desc=$_POST["desc"];
$link=$_POST["link"];
$author=$_POST["author"];
$type=$_POST["type"];
$yop=$_POST["year"];
$sql="select article_id from articles order by article_id desc limit 1";
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_array($res);
$article_id=$result['article_id']+1;
$sql="insert into articles(article_id,title,tag,description,link,author_name,article_type,yop) values($article_id,'$title','$tag','$desc','$link','$author','$type',$yop)";  
$res=mysqli_query($con,$sql);
echo mysqli_error($con);

$sql="insert into uploadby values($article_id,'$email')";  
$res=mysqli_query($con,$sql);
echo mysqli_error($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Insert || NextScholar</title>
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .insert{
            min-width: 60vw;
            min-height: 75vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 35px;
        }

        .insert-1{
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }

        .insert-1 h2{
            text-align: center;
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
            <!-- <li><a class="nav-link" href="logIn.php">Login</a></li>
            <?php
              }
            ?> -->
          </ul>
        </div>
    </nav>
    <div class="insert">
        <div class="insert-1">
            <h2>Article Insertion Form</h2>
            <form action="insert.php" method="post">
                <label>Paper Name: <input type="text" name="pep" id="" required></label><br><br>
                <label>Tag: <input type="text" name="tag" id="" required></label><br><br>
                <label>Description: <br><textarea name="desc" id="" cols="30" rows="10"></textarea></label><br><br>
                <label>Link: <input type="text" name="link" id="" required></label><br><br>
                <label>Author Name: <input type="text" name="author" id="" required></label><br><br>
                <label>Paper Type: <select name="type" id="">
                    <option value="Journal Paper">Journal Paper</option>
                    <option value="Conferencing Paper">Conference Paper</option>
                    </select>
                </label><br><br>
                <label>Year of Publication: <input type="number" name="year" id="" required></label><br><br>
                <input type="submit" name="sub" value="Submit" id="">
            </form>
        </div>
    </div>
</body>
</html>