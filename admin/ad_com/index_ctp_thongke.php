<section class="row block-thong-ke">
    <div class="col-md-3 main-top ">
        <div class="thong-ke">
            <div>
                <img class="img-fluid logo-thong-ke" src="<?php echo $level.IMG;?>thunhap.png" alt="" srcset="">
            </div>
            <div class="so-lieu-thong-ke">
                <p class="p-thong-ke">22.000.000 <span>VND</span></p>
                <p class="p-thong-ke">Tổng doanh thu</p>
            </div>
        </div>
    </div>
    <div class="col-md-3  main-top">
        <div class="thong-ke">
            <div>
                <img class="img-fluid logo-thong-ke" src="<?php echo $level.IMG;?>user.jpg" alt="" srcset="">
            </div>
            <div class="so-lieu-thong-ke">
                <p class="p-thong-ke">1.000.000 <span></span></p>
                <p class="p-thong-ke">Số lượng tài khoản</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 main-top">
        <div class="thong-ke">
            <div>
                <img class="img-fluid logo-thong-ke" src="<?php echo $level.IMG;?>truycap.jpg" alt="" srcset="">
            </div>
            <div class="so-lieu-thong-ke">
            <?php foreach($getAllView as $getAllView) {?>
                <p class="p-thong-ke" ><?php echo $getAllView['allview'];?></p>
                <?php }?>
                <p class="p-thong-ke">Số lượt truy cập</p>
            </div>
        </div>
    </div>
    <div class="col-md-3  main-top">
        <div class="thong-ke">
            <div>
                <img class="img-fluid logo-thong-ke" src="<?php echo $level.IMG;?>baiviet.png" alt="" srcset="">
            </div>
            <div class="so-lieu-thong-ke">
            <?php foreach($getCountPost as $getCountPost) {?>
                <p class="p-thong-ke" ><?php echo $getCountPost['allPost'];?></p>
                <?php }?>
                <p class="p-thong-ke">Bài viết</p>
            </div>
            </div>
        </div>
    </div>
</section>