<?php
$checkrole  = $_SESSION["permission"];
if($checkrole != 0){
    header('location:../index.php');
}
?>