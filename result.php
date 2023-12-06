<?php
include("connection.php");
if(isset($_GET["submit"])){
    $key=$_GET["search_key"];
    $sql="SELECT * FROM article_listing_google_scholar_data_mining where Title like '%$key%' or Author like '%$key%' or Description like '%$key%'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="/Assets/University_of_Calcutta_logo.svg.png" alt="Logo" width="30" height="24">
          </a>
          <ul class = "signupLoginList">
            <li><a class="nav-link" href="#">Login</a></li>
          </ul>
        </div>
    </nav>
  

<?php
    echo "Result Generated ".$row;
    while($result=mysqli_fetch_array($res)){
    ?>
    <div class="card">
  <h5 class="card-header"><?php echo $result['Title']; ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['Author']; ?></h5>
    <p class="card-text"><?php echo $result['Description']; ?></p>
    <a href=<?php  echo $result['Article_Link']; ?> class="btn btn-primary">Visit For More Details</a>
  </div>
</div>
    <?php
    }
    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>