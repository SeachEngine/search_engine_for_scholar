<?php
if(!isset($_SESSION['name'])){
    header("location:index.php");   
}
session_start();

session_unset();
session_start();
header("location:index.php");
?>