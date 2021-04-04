<?php
$checkrole  = $_SESSION["permission"];
if($checkrole != 2 && $checkrole != 0 ){
    header('location:../index.php');
}
if(isset($_GET['logout'])){
    session_start();
    session_destroy();
    header("location:../login.php");
}
?>