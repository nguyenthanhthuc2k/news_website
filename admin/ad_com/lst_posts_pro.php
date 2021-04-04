<?php
// khóa bài viết
if(isset($_POST['save-block'])){
    if($checkrole != 0 ){
        echo"<script>alert('Bạn không có quyền duyệt bài viết!')</script>";
    }else{
    $getid = $_POST['getid'];
    $results = Posts::blockPost($getid);
}
};
// mở khóa bài viết
if(isset($_POST['save-unblock'])){
    if($checkrole != 0 ){
        echo"<script>alert('Bạn không có quyền duyệt bài viết!')</script>";
    }else{
    $getid = $_POST['getid'];
    $results = Posts::unblockPost($getid);
    }
};

// xóa bài viết
if(isset($_POST['delete'])){
    if($checkrole != 0){
        echo"<script>alert('Bạn không có quyền xóa !')</script>";
    }else{
        $getid = $_POST['getid'];
        $results = Posts::delPost($getid);
        echo"<script>alert('Xóa thành công !')</script>";
    }
    
};
//===============================PHAN TRANG
//lấy danh sách cat
$getCategories = Posts::getCategories();
//lấy danh sách bài viết
$lstPost = Posts::getAllPost();
    $_item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5; //số sản phẩm 1 trang
    $_current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
    $_offset = ($_current_page - 1)*$_item_per_page; // ví trí bắt đầu lấy sản phẩm
    $lstPost = DP::run_query("SELECT * FROM posts ORDER BY `id` DESC LIMIT ".$_item_per_page." OFFSET ".$_offset,[],2);
    $_item = DP::run_query("SELECT * FROM posts ",[],2); // lấy all sản phẫm
    $_total_item = count($_item); // đếm tổng số sản phẩm
    $_total_page = ceil($_total_item/ $_item_per_page); // tổng số trang --- ceil làm tròn
    $_current_total_item = ($_current_page * 5);

    
?>