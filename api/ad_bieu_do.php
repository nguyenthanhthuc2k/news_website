<?php
//ADMIN/PAGES/binh luận
// cấu hình đường dẩn
require_once('../config.php');
// cấu hình level
$level = L1;
//kết nối database
require_once($level.LIB.'db.php');
//gọi class bình luận
require_once($level.LIB.'clsIndex_ad.php');
// sql
$total_view = Index::getView(getdate()['year']);
echo json_encode($total_view);

?>