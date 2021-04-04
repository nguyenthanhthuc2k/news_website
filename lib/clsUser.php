<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class User{
    //lấy all user
    public static function getAllUser(){
        return DP::run_query("SELECT * FROM `user_admin` WHERE  `id` NOT IN (SELECT MIN(id) FROM `user_admin`) ORDER BY `id` DESC",[],2);
    }
    //lấy info user login // đang gán đở chưa login
    public static function infoUser($user){
        return DP::run_query("SELECT * FROM user_admin WHERE `username`='$user'",[],2);
    }
    //update info có hình
    public static function updateFull($file_name,$name,$phone,$mail,$username){
        return DP::run_query("UPDATE user_admin SET `name`='$name',`phone`='$phone',`mail`='$mail',`avatar`='$file_name' WHERE `username`= '$username'",[],1);
    }
    //update info không có hình
    public static function updatenIMG($name,$mail,$phone,$username){
        return DP::run_query("UPDATE `user_admin` SET `name`= '$name', `mail`='$mail', `phone`= '$phone'  WHERE `username`= '$username'",[],1);
    }
    //update password user
    public static function updatePass($username,$new_password){
        return DP::run_query("UPDATE `user_admin` SET `password`= '$new_password' WHERE `username`= '$username'",[],1);
    }
    // kiểm tra user có tồn tại hay không
    public static function check($username,$password){
        return DP::run_query("SELECT * FROM user_admin WHERE `username`='$username' AND `password`='$password' ",[],2);
    }
    // UPDATE KHÓA //lst_user.php ad
    public static function block($id){
        return DP::run_query("UPDATE user_admin SET `status`='0' WHERE `id`= '$id'",[],3);
    }
    // UPDATE MỞ
    public static function unblock($id){
        return DP::run_query("UPDATE user_admin SET `status`='1' WHERE `id`= '$id'",[],3);
    }
    // UPDATE MỞ //lst_user.php ad
    public static function selectStatus($id){
        return DP::run_query("SELECT * FROM user_admin WHERE `id`= '$id'",[],2);
    }
}
?>