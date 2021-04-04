<?php
if(isset($_POST['save'])){
    $id = $_POST['id'];
    //khai báo  biến chứa value cần insert
    $title = $_POST['title'];
    $content = $_POST['ckeditor'];
    $type_post= $_POST['type_post'];
    $author = $_POST['author'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $categories ='';
    $getAllCat = Categories::getCatUnBlock();
    // công các id chủ đề vào chuỗi
    for($i = 0; $i < count($getAllCat); $i++){
        if(isset($_POST['cat'.$i])){
            $categories =  $categories.$_POST['hf_cat'.$i].',';
        }
    }
    //cắt kí tự , cuối của chuỗi
    $categories = substr("$categories",0,-1);
    //giới hạn đuôi file
    $permiter = array('jpg','jpeg','png','gif');
    // kiểm  tra người dùng có nhập đầy đủ thông tin không
    if($title==""|| $content ==""|| $categories==""|| $type_post==""|| $author==""){
        $alert ="<span class='error'>Vui lòng nhập đầy đủ thông tin</span>";
        echo $alert;
    }else{
        if($file_size > 204800){
            $alert ="<span class='error'>Vui lòng chọn ảnh có dung lượng dưới 20MB</span>";
            echo $alert;
        }
        elseif($file_name ==""){
            $results = Posts::editPost_nIMG($title,$content,$categories,$type_post,$id,$author);
            // $alert ="<span class='success'>Update thành công editPost_nIMG !!</span";
            // echo $alert;
        }
        else{
            $results = Posts::editPost_full($title,$content,$file_name,$categories,$type_post,$id,$author);
            move_uploaded_file($_FILES['image']['tmp_name'], $level.IMG .$_FILES['image']['name']);
            // $alert ="<span class='success'>Update thành công editPost_full !!</span";
            // echo $alert;
        }
    }
}

// if( $id = $_GET['id'];)
    //xem chi tiết bài viết
    $detailPost = Posts::detailPost();
    //lấy danh sách chủ đề
    $getAllCat = Categories::getCatUnBlock();
    //lấy danh sách loại bài viết
    $getAllTypePost = TypePost::getTypePostsUnBlock();
    //lấy tên option chủ đề chi tiết của bài viết
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(is_numeric($id)){
            $getDetailOption = Posts::detailOption($id);
            if($getDetailOption == null){
                header('location:'.$level.PAGES_AD.'lst_post.php');
            }
        }
        else{
            header('location:'.$level.PAGES_AD.'lst_post.php');
        }
    }
    
?>