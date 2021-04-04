<?php
// chi tiết slide 
// $getDetailSlide = Slide::getDetailSlide();
// khóa 
if(isset($_POST['btn-block'])){
    $getid = $_POST['getid'];
    Slide::blockSlideQc2($getid);
};
// mở 
if(isset($_POST['btn-unblock'])){
    $getid = $_POST['getid'];
    Slide::unblockSlideQc2($getid);
};
// xóa 
if(isset($_POST['btn-del'])){
    $getid = $_POST['getid'];
    Slide::delSlideQc2($getid);
    echo"<script>alert('Xóa thành công !')</script>";
};
//lấy all slide
$getSlides = Slide::getAllSlideQc2();
?>