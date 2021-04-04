<?php 
///lấy data chủ đề bài viết
$getCategories = Categories::getCatUnBlock();
//lấy data loại bài viết
$getTypePosts = TypePost::getTypePostsUnBlock();
if(isset($_POST['save'])){
    //khai báo  biến chứa value cần insert
    $ctv = $_SESSION["ctv"];
    $title = $_POST['title'];
    $content = $_POST['ckeditor'];
    $author = $_POST['author'];
    $type_post= $_POST['type_post'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $categories ='';
    // công các id chủ đề vào chuỗi
    for($i = 0; $i < count($getCategories); $i++){
        if(isset($_POST['cat'.$i])){
            $categories =  $categories.$_POST['hf_cat'.$i].',';
        }
    }
    //cắt kí tự , cuối của chuỗi
    $categories = substr("$categories",0,-1);
    if($title==""|| $content ==""|| $categories==""|| $type_post=="" ||$file_name==""|| $author==""){
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin')</script>";
    }//kiểm tra size của hình
    else if($file_size > 2048000){
        $alert ="<span class='error'>Vui lòng chọn ảnh có dung lượng dưới 20MB</span>";
        echo $alert;
    }else{
        $id = Posts::addPost($title,$content,$categories,$type_post,$author,$ctv);
        if(!$id)
        {
            echo '<script>alert("Them that bai");</script>';
        }
        else
        {
        //giới hạn đuôi file
        $permiter = array('jpg','jpeg','png','gif');
        //lấy hình vào thư mục chứ hình
        //đổi tên hình
        $img=$id.'post.'.pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], $level.IMG.$img);
        $check = Posts::update_img($id,$img);
        if($check){
            setTimeout(function() {
                show_modal('Thông báo', 'thêm thành công');
            }, 500);
        }
        }
    }
    
}
?>
<style>
.my-modal {
    display: none;
    z-index: 1055;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .5);
    width: 100%;
    height: 100%;
}

.my-modal .modal-main {
    width: 50%;
    background-color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    border-radius: 5px;
}
</style>
<div class="my-modal" id="my-modal-warning">
    <div class="modal-main">
        <div class="modal-header">
            <div class="modal-title text-danger">
                <h3>Cảnh báo !!!</h3>
            </div>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="close-modal">Đóng</button>
            <!-- <button type="button" class="btn btn-danger" id="ok">Đồng ý</button> -->
        </div>
    </div>
</div>
<script>
function show_modal(title, content) {
    document.getElementsByClassName('my-modal')[0].classList.add('d-block');
    document.getElementsByClassName('modal-title')[0].innerHTML = '<h3>' + title + '</h3>';
    document.getElementsByClassName('modal-body')[0].innerHTML = '<h6>' + content + '</h6>';
}

function hide_modal() {
    document.getElementsByClassName('my-modal')[0].classList.remove('d-block');
}
// đóng modal khi click btn đóng
document.getElementById('close-modal').addEventListener('click', () => {
    hide_modal();
})
</script>