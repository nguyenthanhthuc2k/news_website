<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class TypePost{
    //lấy all loại bài viết
    //lst_post.php
    public static function getTypePosts(){
        return DP::run_query("SELECT * FROM post_type WHERE `status`= '0' OR `status`= '1' ORDER BY `id` DESC",[],2);
    }
    //lấy loại bài viết hoạt động
    //add_post.php
    public static function getTypePostsUnBlock(){
        return DP::run_query("SELECT * FROM post_type WHERE post_type.status = 1 ORDER BY `id` DESC",[],2);
    }
    //lấy loại bài viết không hoạt động
    //lst_type_post
    public static function getTypePostsBlock(){
        return DP::run_query("SELECT * FROM post_type WHERE post_type.status = 0 ORDER BY `id` DESC",[],2);
    }

    //update tên type post
    //lst_type_post
    public static function updateTypePost($id,$editTypePost){
        return DP::run_query("UPDATE post_type SET `name`= '$editTypePost' WHERE `id` = $id",[],3);
    }
    //add  type post
    //lst_type_post
    public static function addTypePost($nameTypePost){
        return DP::run_query("INSERT INTO post_type (`name`,`status`) VALUES(?,'1')",[$nameTypePost],3);
    }
    //block status
    //lst_type_post
    public static function blockTypePost($id){
        return DP::run_query("UPDATE post_type SET `status`= '0' WHERE `id` = $id",[],3);
    }
    //unblock status
    //lst_type_post //ad
    public static function unblockTypePost($id){
        return DP::run_query("UPDATE post_type SET `status`= '1' WHERE `id` = $id",[],3);
    }
    //del type post
    //lst_type_post.php //ad
    public static function delTypePost($id){
        return DP::run_query("DELETE FROM post_type  WHERE `id` = $id",[],3);
    }
    //CHECK TYPE CÓ TỒN TẠI HAY KHÔNG TRƯỚC KHI INSERT //lst_type_post.php
    public static function checktype($nameTypePost){
        return DP::run_query("SELECT post_type.name FROM `post_type` WHERE post_type.name IN (SELECT post_type.name FROM `post_type` WHERE post_type.name = '$nameTypePost')",[],2);
    }
}

?>