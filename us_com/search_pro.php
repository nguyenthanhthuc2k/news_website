<?php
if(isset($_GET['txtSearch'])){
    $key =$_GET['txtSearch'];
    $ketqua = Posts::search($_GET['txtSearch']);
    $countkq = count($ketqua);
}
?>