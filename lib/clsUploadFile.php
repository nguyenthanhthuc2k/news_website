<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class upload{
    public static function checkFile($file){
        //nơi luu hình
        $target_dir = "../../img/";
        //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        $target_file   = $target_dir . basename($file["name"]);
        //Lấy phần mở rộng của file (jpg, png, ...)
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($file['name']==''){
            echo'<script>alert("Vui lòng chọn hình ảnh !")</script>';
            return false;
        }else if ($FileType !='png' && $FileType !='jpg' && $FileType !='git' && $FileType !='jpeg'){
            echo'<script>alert("Đây không phải là hình ảnh !")</script>';
            return false;
        }
        else if(move_uploaded_file($file['tmp_name'], $target_file)){
            return true;
        }
        
    }
}

?>