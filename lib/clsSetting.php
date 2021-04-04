<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');

class Setting{
    //select ALL SETTING
    public static function getSetting(){
        return DP::run_query("SELECT * FROM setting LIMIT 1",[],2);
    }
   
    //update title
    public static function updateLogo($file_name){
        return DP::run_query("UPDATE setting SET `img-logo` = '$file_name'",[],3);
    }
    //update fb
    public static function updateFacebook($fb){
        return DP::run_query("UPDATE setting SET `link-facebook`= '$fb'",[],3);
    }
    //update ytb
    public static function updateYoutube($ytb){
        return DP::run_query("UPDATE setting SET `link-youtube`= '$ytb'",[],3);
    }
    //update Twitter
    public static function updateTwitter($twitter){
        return DP::run_query("UPDATE setting SET `link-twitter`= '$twitter'",[],3);
    }
    //update Map
    public static function updateMap($map){
        return DP::run_query("UPDATE setting SET `link-map-address`= '$map'",[],3);
    }
    //update Map
    public static function updateInstagram($instagram){
        return DP::run_query("UPDATE setting SET `link-instagram`= '$instagram'",[],3);
    }
    //update phone
    public static function updatePhone($phone){
        return DP::run_query("UPDATE setting SET `phone`= '$phone'",[],3);
    }
    //update mail
    public static function updateMail($mail){
        return DP::run_query("UPDATE setting SET `mail`= '$mail'",[],3);
    }

    //update link-video-intro
    public static function updateIntro($intro){
        return DP::run_query("UPDATE setting SET `link-video-intro`= '$intro'",[],3);
    }
    //update address
    public static function updateAddress($address){
        return DP::run_query("UPDATE setting SET `address`= '$address'",[],3);
    }

    //update about
    public static function updateAbout($about){
        return DP::run_query("UPDATE setting SET `about`= '$about'",[],3);
    }
    //update title
    public static function updateTitle($title){
        return DP::run_query("UPDATE setting SET `title`= '$title'",[],3);
    }
}   
?>