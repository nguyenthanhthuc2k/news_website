<?php

//update info
if(isset($_POST['btn-update-info'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $username = $_POST['btn-update-info'];
    if($name==''||$phone==''||$mail==''){
       echo'<script>alert(" Nhập đầy đủ thông tin dùm đi má !!!")</script>';
    }elseif ($file_size > 204800) {
      echo'<script>alert("Hình dưới 2mb thui má!!!")</script>';
    }elseif ($file_name =="") {
        $results = User::updatenIMG($name,$mail,$phone,$username);
        echo'<script>alert(" Cập nhật thành công!!!")</script>';
    }else{
        $results = User::updateFull($file_name,$name,$phone,$mail,$username);
        move_uploaded_file($_FILES['image']['tmp_name'], $level.IMG .$_FILES['image']['name']);
        echo'<script>alert(" Cập nhật thành công!!!")</script>';
    }
}
//update password
if(isset($_POST['btn-update-pass'])){
    $pass_present = md5($_POST['pass-present']);
    $new_password = md5($_POST['new-password']);
    $enter_password = md5($_POST['enter-password']);
    $username = $_POST['btn-update-pass'];
    $pass = User::infoUser($username);
    if( $pass_present==''||$new_password==''||$enter_password==''){
       echo'<script>alert(" Nhập đầy đủ thông tin dùm đi má !!!")</script>';
    }elseif ($new_password != $enter_password){
        echo'<script>alert("Mk mới phải trùng nhau !!!")</script>';
    }elseif ($pass_present != $pass[0]['password']) {
        echo'<script>alert("Mk cũ không trùng khớp !!!")</script>';
    }else{
        $results = User::updatePass($username,$new_password);
        echo'<script>alert("Đổi mật khẩu thành công !!!")</script>';
    }
}
// gán cứng user 
$user = $_SESSION["ctv"];
$infoUser = User::infoUser($user);
?>