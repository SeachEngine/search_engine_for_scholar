<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location:index.php");
}

include("connection.php");
$email=$_SESSION["email"];
$sql= "select * from articles where article_id in(select article_id from uploadby where email='$email')";
$res=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Dashboad || NextScholar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./Assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
  table,th,tr,td{
    color:black;
    margin-top:1.5rem;
    padding:1rem;
  }
  input{
    background-color:#0d6efd;
    color:#fff;
    width 3.5rem;
    border:none;
    margin:5px;
    border-radius:2px;
  }
</style>
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
            <li><a class="nav-link" href="insert.php">Insert</a></li>
            
          </ul>
        </div>
    </nav>

    <table class="mt-2">
        <tr>
            <th>Article ID</th>
            <th>Paper Name</th>
            <th>Tag</th>
            <th>Description</th>
            <th>Link</th>
            <th>Author Name</th>
            <th>Paper Type</th>
            <th>Year of Publication</th>
            <th>Action</th>
        </tr>
        <?php
        while($result=mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><?php echo $result['article_id']  ?></td>
            <td><?php echo $result['title']  ?></td>
            <td><?php echo $result['tag']  ?></td>
            <td><a href="shortDescription.php">abstract</a></td>
            <td><a href="<?php echo $result['link']  ?>">Link</a></td>
            <td><?php echo $result['author_name']  ?></td>
            <td><?php echo $result['article_type']  ?></td>
            <td><?php echo $result['yop']  ?></td>
            <td>
                <form action="removeArticle.php?id=<?php echo $result['article_id']  ?>" method="post">
                    <input type="submit" name="remove" value="Remove" id="">
                </form>
                <span>
                <form action="update.php?id=<?php echo $result['article_id']  ?>" method="post">
                <input type="submit" name="update" value="Update" id="">
                </form>
                </span>
                
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>