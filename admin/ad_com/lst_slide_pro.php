<?php
// chi tiết slide 
// $getDetailSlide = Slide::getDetailSlide();
// khóa 
if(isset($_POST['btn-block'])){
    $getid = $_POST['getid'];
    $results = Slide::blockSlide($getid);
};
// mở 
if(isset($_POST['btn-unblock'])){
    $getid = $_POST['getid'];
    $results = Slide::unblockSlide($getid);
};
// xóa 
if(isset($_POST['btn-del'])){
    $getid = $_POST['getid'];
    $results = Slide::delSlide($getid);
    echo"<script>alert('Xóa thành công !')</script>";
};
//lấy all slide
$getSlides = Slide::getSlides();
?>