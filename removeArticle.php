<?php
include("connection.php");
$article_id=$_GET['id'];
$sql="delete from uploadby where article_id=$article_id";
$res=mysqli_query($con,$sql);
$sql="delete from saved where article_id=$article_id";
$res=mysqli_query($con,$sql);
$sql="delete from articles where article_id=$article_id";
$res=mysqli_query($con,$sql);
header("location:article.php");


?>