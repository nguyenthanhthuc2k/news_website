<?php 
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class Index{
    // lấy danh sách lượng view
    //22/3/2021
    public static function getView($year){
        return DP::run_query("SELECT january,february,march,pril,may,june,july,august,september,october,november,december FROM view    WHERE `year` = ?",[$year],2);
    }
    //lấy tổng lượng  view
    //30/3/2021 
    public static function getAllView(){
        return DP::run_query("SELECT sum(september+january+february+march+pril+may+june+july+august+october+november+december) as allview FROM `view`",[],2);
    }

}
?>