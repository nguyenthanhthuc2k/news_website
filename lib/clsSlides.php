<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class Slide{
// lấy tất cả slide
// lsts_slide.php
//NTT- 13/3/2021

public static function getSlides(){
    return DP::run_query("SELECT *  FROM slide ORDER BY `id` DESC",[],2);
}
// select detail silde để edit
    public static function getDetailSlide($id ){
    return DP::run_query("SELECT * FROM slide WHERE `id`=$id",[],2);
}
// lấy slide hoạt động
// lsts_slide.php 
// NTT- 13/3/2021
public static function getSlidesUnBlock(){
    return DP::run_query("SELECT *  FROM slide WHERE `status`=1 ORDER BY `id` DESC",[],2);
}

// lấy slide k hoạt động
// lsts_slide.php 
//NTT- 13/3/2021
public static function getSlidesBlock(){
    return DP::run_query("SELECT *  FROM slide WHERE `status`=0 ORDER BY `id`DESC",[],2);
} 
//block
//lst_slide
public static function blockSlide($id){
    return DP::run_query("UPDATE slide SET `status`= '0' WHERE `id` = $id",[],3);
}
//unblock
//lst_slide
public static function unblockSlide($id){
    return DP::run_query("UPDATE slide SET `status`= '1' WHERE `id` = $id",[],3);
}
//delete
//lst_slide
public static function delSlide($getid){
    return DP::run_query("DELETE FROM slide WHERE `id` = $getid",[],3);
}
//add  slide
//lst_cat
public static function addSlide($name,$content,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("INSERT INTO slide (`title`,`content`,`note`,`link_ad`,`chi_phi`,`ngay_bat_dau`,`ngay_ket_thuc`,`status`) VALUES(?,?,?,?,?,?,?,'0')",[$name,$content,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc],3);
}
//add img slide
//lst_cat
public static function updateIMG($img,$id){
    return DP::run_query("UPDATE  slide SET `image` = ?  WHERE `id` = ?",[$img,$id],1);
}
//edit slide full
public static function editSlideFull($note,$name,$content,$link,$chi_phi,$id,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("UPDATE  slide SET `note`= ? ,`title`= ?,`content`= ?,`link_ad`= ?,`chi_phi`= ?,`ngay_bat_dau`=?,`ngay_ket_thuc`=?  WHERE `id` = ? ",[$note,$name,$content,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc,$id],1);
}
//edit slide nIMG
public static function editSlidenIMG($name,$content,$id,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("UPDATE  slide SET `note`= ? ,`title`= ?,`content`= ?,`link_ad`= ?,`chi_phi`= ?,`ngay_bat_dau`=?,`ngay_ket_thuc`=?  WHERE `id` = ? ",[$note,$name,$content,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc,$id],1);
}
//  US
//lấy top 3 slide k bị khóa
public static function get3Slide(){
    return DP::run_query("SELECT * FROM `slide`  WHERE `status` = 1 ORDER BY `id` DESC LIMIT 3",[],2);
}
// ============================================ QUẢNG CÁO NHỎ ======================================
// lấy tất cả slide
//lst_slide_QC2
public static function getAllSlideQc2(){
    return DP::run_query('SELECT *  FROM slide_qc2 ORDER BY `id` DESC',[],2);
}
// select detail silde để edit
//lst_slide_QC2
public static function getDetailSlide_Qc2($id){
    return DP::run_query('SELECT * FROM slide_qc2 WHERE `id`=?',[$id],2);
}
//add  slide
//lst_slide_QC2
public static function addSlideQc2($note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("INSERT INTO slide_qc2 (`note`,`link_ad`,`chi_phi`,`ngay_bat_dau`,`ngay_ket_thuc`,`status`) VALUES(?,?,?,?,?,'0')",[$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc],3);
}
//add img slide
//lst_slide_QC2
public static function updateIMGQc2($img,$id){
    return DP::run_query("UPDATE  slide_qc2 SET `image` = ?  WHERE `id` = ?",[$img,$id],1);
}
//edit slide full
public static function editSlideFullQc2($note,$link,$chi_phi,$id,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("UPDATE  slide_qc2 SET `note`= ?,`link_ad`= ?,`chi_phi`= ? ,`ngay_bat_dau` =?,`ngay_ket_thuc`=?  WHERE `id` = ? ",[$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc,$id],1);
}
//edit slide nIMG
//lst_slide_QC2
public static function editSlidenIMGQc2($id,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc){
    return DP::run_query("UPDATE  slide_qc2 SET `note`= ?,`link_ad`= ?,`chi_phi`= ?, `ngay_bat_dau` =?,`ngay_ket_thuc`=? WHERE `id` = ? ",[$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc,$id],1);
}
//block
//lst_slide_QC2
public static function blockSlideQc2($id){
    return DP::run_query("UPDATE slide_qc2 SET `status`= '0' WHERE `id` = $id",[],3);
}
//unblock
//lst_slide_QC2
public static function unblockSlideQc2($id){
    return DP::run_query("UPDATE slide_qc2 SET `status`= '1' WHERE `id` = $id",[],3);
}
//delete
//lst_slide_QC2
public static function delSlideQc2($getid){
    return DP::run_query("DELETE FROM slide_qc2 WHERE `id` = $getid",[],3);
}
//lấy top 3 slide k bị khóa
public static function get3SlideQc2(){
    return DP::run_query("SELECT * FROM `slide_qc2`  WHERE `status` = 1 ORDER BY `id` DESC LIMIT 3",[],2);
}
}
?>