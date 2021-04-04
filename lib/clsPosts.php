<?php
//================== db.php ================ -->
require_once($level.LIB.'db.php');
class Posts{
    //lấy toàn bộ bài viết cho 5  sản phẩm 1 trang
    // 11/3/2021, NTT
    //file lst_posts_ctp
    public static function getAllPost(){
        // return $_item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5; //số sản phẩm 1 trang
        // return $_current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        // return $_offset = ($_current_page - 1)*$_item_per_page; // ví trí bắt đầu lấy sản phẩm
        // return DP::run_query("SELECT * FROM posts ORDER BY `id` DESC LIMIT ".$_item_per_page" OFFSET ".$offset,[],2);
        // return $_item = DP::run_query("SELECT * FROM posts ",[],2); // lấy * sản phẫm
        // return $_total_item = count($_item); // đếm tổng số sản phẩm
        // return $_total_page = ceil($_total_item/ $_item_page); // tổng số trang --- ceil làm tròn
    }
    //lấy all chuyên mục
    // 11/3/2021, NTT
    //file edit_posts_ctp
    public static function getCategories(){
        return DP::run_query("SELECT * FROM menu ORDER BY `id` DESC",[],2);
    }

    //xem chi tiết bài viết để edit
    // 11/3/2021, NTT
    //file edit_posts_ctp
    public static function detailPost(){
        $id = $_GET['id'];
        return DP::run_query("SELECT * FROM posts WHERE `id` = ? ORDER BY `id` DESC",[$id],2);
    }
    //xem chi tiết tên chủ đề bài viết , loại bài viết để select
    // 11/3/2021, NTT
    //file edit_posts_ctp
    public static function detailOption($id){
        // $id = $_GET['id'];
        return DP::run_query("SELECT post_type.id as id_post_type , menu.id as id_menu, menu.name as name_menu, post_type.name as name_post_type FROM menu, posts, post_type WHERE posts.categories = menu.id and posts.type_post = post_type.id and posts.id = ?",[$id],2);
    }

    //thêm bài viết
    // 11/3/2021, NTT
    //file add_post_ctp
    public static function addPost($title,$content,$categories,$type_post,$author,$ctv){
        return DP::run_query("INSERT INTO posts (`title`,`content`,`datetime`,`author`,`categories`,`type_post`,`ctv`,`status`) VALUES (?,?,Now(),?,?,?,?,'0')",[$title,$content,$author,$categories,$type_post,$ctv],3);
    }
    // thêm hình /bài viết
    public static function update_img($id,$img){
        return DP::run_query("UPDATE posts SET `image`=? WHERE `id`= ?",[$img,$id],3);
    }
    //sửa bài viết
    // 11/3/2021, NTT
    //file edit_post_ctp
    public static function editPost_full($title,$content,$file_name,$categories,$type_post,$id,$author){
        return DP::run_query("UPDATE posts SET `title` = '$title' ,`content`='$content',`image`='$file_name',`categories`='$categories',`type_post`='$type_post',`author`='$author' WHERE `id`= $id",[],3);
    }
    public static function editPost_nIMG($title,$content,$categories,$type_post,$id,$author){
        return DP::run_query("UPDATE posts SET `title` = '$title' ,`content`='$content',`author`='$author',`categories`='$categories',`type_post`='$type_post' WHERE `id`= $id",[],3);
    }

    //khóa bài viết
    //13/3/2021
    //lst_post.php
    public static  function blockPost($getid){
        return DP::run_query("UPDATE posts SET `status`='0' WHERE `id`= $getid",[],3);
    }
    public static  function unblockPost($getid){
        return DP::run_query("UPDATE posts SET `status`='1' WHERE `id`= $getid",[],3);
    }

    //xóa bài viết
    //13/3/2021
    //lst_post.php
    public static  function delPost($getid){
        return DP::run_query("DELETE FROM posts  WHERE `id`= $getid",[],3);
    }
    //ĐẾM TỔNG SỐ BÀI VIẾT
    //30/3/2021
    //index.php
    public static  function getCountPost(){
        return DP::run_query("SELECT count(*) as allPost FROM `posts`",[],2);
    }
    //=================================== END BACKEND  ===================================
    // bài viết mới nhất
    //18/3/2021
    public static function getNewPost(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
 
    //xem chi tiết bài biết
    //18/3/2021
    public static function getDetailPost($id){
        return DP::run_query("SELECT * FROM posts WHERE `id` = ?",[$id],2);
    }
    // bài viết nóng mới nhất  ( 1 bài)
    //18/3/2021
    public static function getHotPost(){
        return DP::run_query("SELECT * FROM posts WHERE posts.status = 1 and  `type_post` = 1 ORDER BY `id` DESC LIMIT 1",[],2);
    }
    // lst tin nóng từ top 2 về sau  ( 3  bài)
    //18/3/2021
    public static function getHotPost2after(){
        return DP::run_query("SELECT * FROM `posts` WHERE posts.status = 1 and  posts.id IN (SELECT all(id) FROM posts WHERE posts.type_post = 1 AND posts.id NOT IN (SELECT MAX(id) FROM posts as post WHERE post.type_post =1)) ORDER BY `id` DESC LIMIT 3",[],2);
    }
    // lst tin nóng ( 5  bài mới nhất)
    //30/3/2021
    public static function getBaiVietNong(){
        return DP::run_query("SELECT * FROM `posts` WHERE posts.status = 1 ORDER BY `id` DESC LIMIT 5",[],2);
    }
    // ===================lấy thông tin theo chủ đề
    // PhapLuat
    
    public static function getPhapLuat(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,1' 
        or posts.categories like '1,%' or posts.categories like '%,1,%' or posts.categories like '%1%' AND posts.status = 1 ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // GiaiTri
     public static function getGiaiTri(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,2' 
        or posts.categories like '2,%' or posts.categories like '%,2,%' or posts.categories like '%2%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getDuLich
     public static function getDuLich(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,3' 
        or posts.categories like '3,%' or posts.categories like '%,3,%'or posts.categories like '%3%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getKinhTe
     public static function getKinhTe(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,4' 
        or posts.categories like '4,%' or posts.categories like '%,4,%' or posts.categories like '%4%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getKhamPha
     public static function getKhamPha(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,5' 
        or posts.categories like '5,%' or posts.categories like '%,5,%' or posts.categories like '%5%'AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }

     // getKhoaHoc
     public static function getKhoaHoc(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,6' 
        or posts.categories like '6,%' or posts.categories like '%,6,%' or posts.categories like '%6%'AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getTheThao
    public static function getTheThao(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,7' 
        or posts.categories like '7,%' or posts.categories like '%,7,%' or posts.categories like '%7%'AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getTheGioi
     public static function getTheGioi(){
        $limit = 4;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,8' 
        or posts.categories like '8,%' or posts.categories like '%,8,%' or posts.categories like '%8%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
     // getVanHoa
     public static function getVanHoa(){
        $limit = 4;
            return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,9' 
            or posts.categories like '9,%' or posts.categories like '%,9,%' or posts.categories like '%9%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
    // lấy bài viết theo chuyên mục khi ấn vào menu
    public static function getPostCats($id){
        $limit = 6;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,$id' 
        or posts.categories like '$id,%' or posts.categories like '%,$id,%' or posts.categories like '%$id%' AND posts.status = 1  ORDER BY `id` DESC LIMIT $limit",[],2);
    }
    // search theo chuyen mục $key
    public static function getPostKeyCat($key,$id_cat){
        $limit = 6;
        return DP::run_query("SELECT * FROM `posts` WHERE posts.categories like '%,$id_cat' 
        or posts.categories like '$id_cat,%' or posts.categories like '%,$id_cat,%'or posts.categories like '%$id_cat%' AND posts.title like '%$key%' ORDER BY `id` DESC LIMIT $limit",[],2);
    }
    //filter lst_post //ad
    public static function filter_post($sql){
        return DP::run_query($sql,[],2);
    }
    ///================================Kiểm tra trước khi xóa loại bài viết
    //loại bài viết //ad // lst_type_post.php
    public static function checkpost_del_type($id_type){
        return DP::run_query('SELECT * FROM `posts` WHERE posts.type_post = ?',[$id_type],2);
    }
        ///================================Kiểm tra trước khi xóa Chủ đề 
    //loại bài viết //ad // lst_categories.php
    public static function checkpost_del_cat($sql){
        return DP::run_query($sql,[],2);
    }
    //==================== TIM KÍM US================
    //30/3 search.php
    public static function search($key){
        return DP::run_query("SELECT * FROM `posts` WHERE `title` like '%$key%' OR `content` like '%$key%' ORDER BY `id` DESC ",[],2);
    }
}
?>