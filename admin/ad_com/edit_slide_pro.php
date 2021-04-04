<?php
//uupdate
if(isset($_POST['btn-save-edit-slide'])){
    $id= $_POST['id'];
    $note = $_POST['note'];
    $link =  $_POST['link_ad'];
    $chi_phi =  $_POST['chi_phi'];
    $ngay_bat_dau = date("Y-m-d",strtotime($_POST['ngay_bat_dau']));
    $ngay_ket_thuc = date("Y-m-d",strtotime($_POST['ngay_ket_thuc']));
    $name = $_POST['editTitle'];
    $content = $_POST['ckeditor'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    if($name ==""|| $note ==""|| $content ==""|| $link==""||$chi_phi==""||$ngay_bat_dau ==""||$ngay_ket_thuc==""){
        echo "<span class='error'>Vui lòng nhập đầy đủ thông tin !</span>"; 
    }
    elseif($file_size>2048000){
        echo "<span class='error'>Hình phải ảnh dưới 20MB !</span>"; 
    }
    else{
        if($file_name == ""){
            $sql = Slide::editSlidenIMG($name,$content,$id,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc);
            if(!$sql){
                echo "<script>alert('Cập nhật thất bại !')</script>"; 
            }
            else{
                echo "<script>alert('Cập nhật thành công !')</script>"; 
                // echo "<script>window.onload = function(){document.getElementById('myModal').classList.remove('d-none');document.getElementById('myModal').classList.add('d-block')}</script>";
            }
        }
        else{
            $sql = Slide::editSlideFull($note,$name,$content,$link,$chi_phi,$id,$ngay_bat_dau,$ngay_ket_thuc);
            if(!$sql){
                echo "<script>alert('Cập nhật thất bại !')</script>"; 
            }
            else{
                //ghép id hình và đuôi hình ()
                $img = $id.'slide.'.pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                //upload hình vào thư muuc5 hình
                move_uploaded_file($_FILES['image']['tmp_name'], $level.IMG.$img);
                //(trường image ở database phải dc  null)
                $result = Slide::updateIMG($img,$id);
                if(!$result){
                    echo "<script>alert('Cập nhật thất bại !')</script>";
                }
                else{
                    echo "<script>alert('Cập nhật thành công !')</script>"; 
                }
            }
        }
    }
}
//thêm slide 
if(isset($_POST['btn-save-add-slide'])){
    $name = $_POST['editTitle'];
    $note = $_POST['note'];
    $link =  $_POST['link_ad'];
    $chi_phi =  $_POST['chi_phi'];
    $ngay_bat_dau = date("Y-m-d",strtotime($_POST['ngay_bat_dau']));
    $ngay_ket_thuc = date("Y-m-d",strtotime($_POST['ngay_ket_thuc']));
    $content = $_POST['ckeditor'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    if($name ==""|| $note ==""|| $content ==""|| $file_name==""|| $link==""||$chi_phi==""||$ngay_bat_dau ==""||$ngay_ket_thuc==""){
        echo "<script>alert('Không được bỏ trống thông tin!')</script>";
    }
    else if($file_size >2048000){
        echo "<script>alert('Hình phải dưới 20mb !')</script>";
    }
    else{
        //lấy id hình, (insert số 3=> trà về id tăng tự động) xem file db.php
        $id = Slide::addSlide($name,$content,$note,$link,$chi_phi,$ngay_bat_dau,$ngay_ket_thuc);
        if(!$id){
            echo "<script>alert('Thêm thất bại !')</script>"; 
        }
        else{
            //ghép id hình và đuôi hình ()
            $img = $id.'slide.'.pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            //upload hình vào thư muuc5 hình
            if(!$img){
                echo "<script>alert('Thêm thất bại !')</script>"; 
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $level.IMG.$img);
            //(trường image ở database phải dc  null)
            $result = Slide::updateIMG($img,$id);
            if(!$result){
                echo "<script>alert('Cập nhật thất bại !')</script>";
            }
            else{
                echo "<script>alert('Cập nhật thành công !')</script>"; 
            }
             
        }

    }
    
}
$id='';
//Nếu là insert
if(!isset($_GET['id'])){
        $id ='';
        $title_bv ='';
        $content ='';
        $image ='img-upload.png';
        $note ='';
        $btn = 'btn-save-add-slide';
        $link ='';
        $ngay_bat_dau = '';
        $ngay_ket_thuc = '';
        $chi_phi = '';
}
//Nếu là update
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getDetailSlide = Slide::getDetailSlide($id);
    if($getDetailSlide != null){
        $arr = $getDetailSlide[0];
        $id =$arr['id'];
        $title_bv =$arr['title'];
        $content =$arr['content'];
        $image =$arr['image'];
        $note =$arr['note'];
        $link = $arr['link_ad'];
        $ngay_bat_dau = date("Y-m-d",strtotime($arr['ngay_bat_dau']));
        $ngay_ket_thuc = date("Y-m-d",strtotime($arr['ngay_ket_thuc']));
        $chi_phi = $arr['chi_phi'];
        $btn = 'btn-save-edit-slide';
    }else{
        header('location:'.$level.PAGES_AD.'lst_slide.php');
    }
}
?>