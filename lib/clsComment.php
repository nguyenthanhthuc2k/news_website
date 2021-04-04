<?php 
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class Comment{
     // lấy danh sách all bình luận
    //22/3/2021
    public static function getAllBinhLuan($limit){
        return DP::run_query("SELECT * FROM comments WHERE   comments.status = 0  OR comments.status = 1 ORDER BY `id` DESC LIMIT $limit ",[],2);
    }
    //select status cmt theo id sau update
    //22/3/2021
    public static function getStatusCmt($id){
        return DP::run_query("SELECT * FROM comments WHERE  `id` = ?",[$id],2);
    }
    // update status cmt
    //22/3/2021
    public static function BlockCmt($id){
        return DP::run_query("UPDATE comments SET `status` = 0 WHERE `id` = ?",[$id],3);
    }
    public static function unBlockCmt($id){
        return DP::run_query("UPDATE comments SET `status` = 1 WHERE `id` = ?",[$id],3);
    }
    // ========================END ADMIN=======================
    //lấy list bình luận của bài viết 
    //19/3/2021
    public static function getComments( $id){
        $limit = 5;
        return DP::run_query("SELECT * FROM comments WHERE `id_post`= ? AND comments.status = 1 ORDER BY `id` DESC LIMIT $limit",[ $id],2);
    }
    // add comment //us
    //19/3/2021
    public static function addCmt($author,$content,$id_post,$ipaddress){
        return DP::run_query("INSERT INTO comments (`id_post`,`author`,`content`,`datetime`,`ip`,`status`) VALUES(?,?,?,now(),?,'0')",[$id_post,$author,$content,$ipaddress],3);
    }
    //load cmt sau thêm //us
    public static function loadcmt($sql,$id_post){
        return DP::run_query($sql,[$id_post],2);
    }
    // xóa cmt //admin
    //19/3/2021
    public static function delCmt($id){
        return DP::run_query("DELETE FROM comments WHERE `id` = ?",[$id],3);
    }
    //load cmt sau xóa//admin
    public static function loadCmt_after_del($sql,$limit){
        return DP::run_query("$sql",[],2);
    }
    //load cmt sau lọc theo id //admin
    public static function filter_id_post($sql_filter){
        return DP::run_query($sql_filter,[],2);
    }
}
?>