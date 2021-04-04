<?php
// //update
// if(isset($_POST['save-update'])){
//     $id = $_POST['getid'];
//     $nameCat = $_POST['updatenameCat'];
//     $results = Categories::updateCat($id,$nameCat);
// }
//add
if(isset($_POST['save-add'])){
    $nameCat = $_POST['addnameCat'];
    $checkCat = Categories::check_cat_ton_tai($nameCat);
    $check = count($checkCat);
    if($nameCat==''){
        echo'<script>alert("Vui lòng nhập đầy đủ !")</script>';
    }
    else if( $check > 0){
        echo'<script>alert("Chủ đề này đã tồn tại !")</script>';
    }
    else{
        $result = Categories::addCat($nameCat);
        echo '<script>alert("Insert successfull !")</script>';
    }
}
// mở khóa
if(isset($_POST['btn-unBlock'])){
    $id = $_POST['getid'];
    $results = Categories::unBlockCat($id);
}
//block
if(isset($_POST['btn-block'])){
    $id = $_POST['getid'];
    $results = Categories::blockCat($id);
}
//update cat //ad 
if(isset($_POST['btn_save_edit_title'])){
    $name_cat = $_POST['title_edit'];
    $id = $_POST['getid'];
    $check_exist = Categories::check_cat_ton_tai($name_cat);
    $check = count($check_exist);
    if($name_cat ==''){
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin !")</script>';
    }else if($check >0){
        echo '<script>alert("Chủ đề này đã tồn tại !")</script>';
    }else{
        $result = Categories::updateCat($id,$name_cat);
        echo '<script>alert("Update successfull !")</script>';
    }
}
// XÓA CHỦ ĐỀ
if(isset($_POST['btn-del'])){
    $idcat = $_POST['btn-del'];
    $case1 = '%,'.$idcat;
    $case2 = $idcat.',%';
    $case3 = '%,'.$idcat.',%';
    $sql = 'SELECT * FROM `posts` WHERE `categories` LIKE "'.$case1.'" OR `categories` LIKE "'.$case2.'" OR `categories` LIKE "'.$case3.'"';
    $checkpost = Posts::checkpost_del_cat($sql);
    $check = count($checkpost);
    if($check >0){
        echo'<script>alert("Chủ đề này có tồn tại '.$check.' bài viết, Không thể xóa, bạn có thể khóa chủ đề này để không dùng đến nó !")</script>';
    }
    else{
       $results = Categories::delCat($idcat);
}
}
//lấy danh sách menu
$Menus=Categories::getCategories();
?>