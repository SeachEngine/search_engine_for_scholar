<?php
include("connection.php");
$save_id=$_GET['id'];
$sql="delete from saved where save_id='$save_id'";
mysqli_query($con,$sql);
header("location:saved.php");
?>