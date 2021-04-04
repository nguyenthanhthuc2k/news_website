<?php
//updateFacebook
if(isset($_POST['btn-fb'])){
    $fb = $_POST['fb'];
    $result = Setting::updateFacebook();
}

//updateTwitter
if(isset($_POST['btn-twitter'])){
    $twitter = $_POST['twitter'];
    $result = Setting::updateTwitter($twitter);
}
//updateYoutube
if(isset($_POST['btn-ytb'])){
    $ytb = $_POST['ytb'];
    $result = Setting::updateYoutube($ytb);
}

//updateMap
if(isset($_POST['btn-map'])){
    $map = $_POST['map'];
    $result = Setting::updateMap($map);
}


//updatePhone
if(isset($_POST['btn-phone'])){
    $phone = $_POST['phone'];
    $result = Setting::updatePhone($phone);
}

//updateMail
if(isset($_POST['btn-mail'])){
    $mail = $_POST['mail'];
    $result = Setting::updateMail($mail);
}


//updateIntro
if(isset($_POST['btn-intro'])){
    $intro = $_POST['intro'];
    $result = Setting::updateIntro($intro);
}
//updateAddress
if(isset($_POST['btn-address'])){
    $address = $_POST['address'];
    $result = Setting::updateAddress($address);
}
//updateAbout
if(isset($_POST['btn-about'])){
    $about = $_POST['about'];
    $result = Setting::updateAbout($about);
}
//updateTitle
if(isset($_POST['btn-title'])){
    $title = $_POST['title'];
    $result = Setting::updateTitle($title);
}
//updateinstagram
if(isset($_POST['btn-instagram'])){
    $instagram = $_POST['instagram'];
    $result = Setting::updateInstagram($instagram);
}
if(isset($_POST['btn-logo'])){
    $file = $_FILES['logo'];
    $file_name = $_FILES['logo']['name'];
    if(upload::checkFile($file)==true){
        Setting::updateLogo($file_name);
    }    
}
$getSetting = Setting::getSetting();
?>