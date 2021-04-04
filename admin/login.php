<?php
ob_start ();
session_start();
//liên kết với config.php
require_once('../config.php');
//cấu hình level
$level = L1;
//liên kết với config.php
require_once('../lib/db.php');
//liên kết vớiclasUerg.php
require_once('../lib/clsUser.php');
$title ='<title>NTT news - Đăng nhập </title>';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    //================== head ================ -->
    require_once($level.AD_COM.'layout_head.php');
?>
<style>
body{
    /* background-image: url("https://i.ibb.co/DLNCCKM/afe6133f9a31547c35170733da64-1954757.jpg");
    background-repeat: no-repeat,repeat;
    /*  */
    height:100vh;
    background-size:cover;
    background: linear-gradient(45deg, #FF7A5A, #00000000);
}
.frm-login{
    text-align: center;
}
form{
    padding: 20px;
    margin: 120px 0px;
}
.form-control{
    width: 80%!important;
}
button{
background: linear-gradient( 47deg, #00ffff, #ffffff)!important;
    color: #212529!important;
    font-size: revert!important;
    font-weight: 300!important;
    border-radius:18px!important;
    margin: 20px!important;
    width: 150px!important;
}
h1{
    font-size: 46px;
    color: white;
    padding: 30px;
    font-weight:bold;
}
.img-fluid{
    width:100px;
}
</style>
<?php 
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        if($_POST['username'] == '' || $_POST['password']== '' ){
            echo('<script>alert("Please enter your username or password !")</script>');
        }
        if($username && $password){ 
            //check user tồn tại
            $check = User::check($username,$password);
            $count = count($check);
            
            if($count > 0 ){
                $status = $check[0]['status'];
                if($status == 1){
                    // lấy quyền user
                    $_SESSION["ctv"] = $check[0]["username"];
                    $_SESSION["permission"] = $check[0]["role"];
                    // tạo session kiểm tra đăng nhập
                    $_SESSION["login"] = $check;
                    //=> index.php
                    header("Location:index.php");
                }else{
                    echo("<script>alert('Username blocked, Please try again !')</script>");
                }
            }
        }else{
            echo("<script>alert('Username or password not correct or username blocked, Please try again !')</script>");
        }
    }
?>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 frm-login">
            <form action="" method="post">
                <h1>LOGIN FORM</h1>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" aria-label="Username" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="password"placeholder="Enter Password" aria-label="Password" >
                </div>
                <div class="check">
                </div>
                    <button class="btn" name="btn-login" type="submit">LOGIN</button>
                <div class="errorMsg"></div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    
</body>
<?php
    //================== layout script ================ -->
    require_once($level.AD_COM.'layout_script.php');
?>
</html>