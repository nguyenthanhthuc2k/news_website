<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
    class Categories{
        //giải thích phương thức
        //ngày tháng năm chỉnh sửa, người chỉnh sửa
        //file có sử dụng: lst_cat.php
        public static function getCategories(){
            return DP::run_query("SELECT * FROM menu  ORDER BY `id` DESC",[],2);
        }
        //lấy danh sách không bị khóa
        //add_post.php
        public static function getCatUnBlock(){
            return DP::run_query("SELECT * FROM menu WHERE menu.status=1 ORDER BY `id` DESC",[],2);
        }
        

        // khóa cat
        // 11/3/2021, NTT
        // file có sử dụng:
        public static function blockCategory(){
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $sql=DP::run_query("UPDATE menu SET `status` = '0' where id='$id'",[],1);
                // if($sql){
                //     header('location:'.$level.PAGE.'index3.php');
                // }
            }
        }
    //update tên cat
    //lst_cat
    public static function updateCat($id,$editCat){
        return DP::run_query("UPDATE menu SET `name`= '$editCat' WHERE `id` = $id",[],3);
    }
    //add  cat THÊM CATEROGIES
    //lst_cat
    public static function addCat($nameCat){
        return DP::run_query("INSERT INTO menu (`name`,`status`) VALUES(?,'1')",[$nameCat],3);
    }
    //block KHÓA CATEROGIES
    //lst_cat
    public static function blockCat($id){
        return DP::run_query("UPDATE menu SET `status`= '0' WHERE `id` = $id",[],3);
    }
    //unblock MỠ KHÓA CATEROGIES
    //lst_cat //ad
    public static function unBlockCat($id){
        return DP::run_query("UPDATE menu SET `status`= '1' WHERE `id` = $id",[],3);
    }
    //CHECK MENU (CAT) CÓ TỒN TẠI HAY KHÔNG TRƯỚC KHI update //CATEGORIES_PRO.PHP
    public static function check_cat_ton_tai($nameCat){
        return DP::run_query("SELECT menu.name FROM `menu` WHERE menu.name IN (SELECT menu.name FROM `menu` WHERE menu.name = '$nameCat')",[],2);
    }
    //====================================DELETE CATEGORIES // CATEGORIES_PRO.PHP //ad
    public static function delCat($idcat){
        return DP::run_query("DELETE FROM menu WHERE menu.id = ?",[$idcat],3);
    }
    //====================================END BACKEND 
    //lấy thông tin chuyên mục khi click vào chuyên muc menu header
    public static function getInfoCat($id){
        return DP::run_query("SELECT * FROM menu WHERE `id` = ?",[$id],2);
    }
    //lấy thông tin của 1 menu
    public static function getPhapLuat(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 1",[],2);
    }
    public static function getGiaiTri(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 2",[],2);
    }
    public static function getDuLich(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 3",[],2);
    }
    public static function getKhamKha(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 4",[],2);
    }
    public static function getKhoaHoc(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 5",[],2);
    }
    public static function getTheThao(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 6",[],2);
    }
    public static function getTheGioi(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 7",[],2);
    }
    public static function getKinhTe(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 8",[],2);
    }
    public static function getVanHoa(){
        return DP::run_query("SELECT * FROM menu WHERE `id` = 9",[],2);
    }

    }

?>