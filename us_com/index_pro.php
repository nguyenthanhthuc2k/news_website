<?php
//lấy all post theo thứ tự (mới nhất sếp đầu tiên)
$getNewPosts = Posts::getNewPost();
//lấy bài ở tin nóng hổi
$getHotPost = Posts::getHotPost();
// 3 bài nóng hỏi tiếp theo
$getHotPost2after = Posts::getHotPost2after();
/// get post theo chuyên mục
$getPhapLuat = Posts::getPhapLuat();
$getGiaiTri = Posts::getGiaiTri();
$getDuLich = Posts::getDuLich();
$getKinhTe = Posts::getKinhTe();
$getKhamPha = Posts::getKhamPha();
$getKhoaHoc = Posts::getKhoaHoc();
$getTheThao = Posts::getTheThao();
$getTheGioi = Posts::getTheGioi();
$getVanHoa = Posts::getVanHoa();
// lấy 3 slide qc
$get3Slide = Slide::get3Slide();
// lấy 3 slide_qc2
$get3SlideQc2  = Slide::get3SlideQc2();
// lấy thông tin chuyên mục
$getPhapLuats = Categories::getPhapLuat();
$getDuLichs = Categories::getDuLich();
$getKhamKhas = Categories::getKhamKha();
$getKhoaHocs = Categories::getKhoaHoc();
$getTheThaos = Categories::getTheThao();
$getGiaiTris = Categories::getGiaiTri();
$getTheGiois = Categories::getTheGioi();
$getKinhTes = Categories::getKinhTe();
$getVanHoas = Categories::getVanHoa();
?>