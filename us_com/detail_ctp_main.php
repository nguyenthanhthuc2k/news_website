<div class="row main-top">
    <div class="col-md-9">
        <div class="bai-viet-detail">
            <?php foreach($getDetailPost as $getDetailPost) { ?>
            <div class="row">
                <div class="col-lg-8 col-md-6 link">
                    <section class="body-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <i class="fa fa-home" style="color: #a2a7ca;
                                        margin-right: 10px;" aria-hidden="true"></i>
                                <li class=" breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="">Xem chi tiết bài
                                        viết</a>
                                </li>
                            </ol>
                        </nav>
                    </section>
                </div>
                <div class="col-lg-4 col-md-6 nguon">
                    <p>
                        <?php echo $getDetailPost['datetime']?> | by Admin </p>
                </div>
            </div>

            <span></span>

            <h3 class="tieu-de-detail"><?php echo $getDetailPost['title']?></h3>
            <div class="noi-dung-bai-viet">
                <?php echo $getDetailPost['content']?>
            </div>
            <div style="text-align: end;"><span>Tác giả: </span><span><?php echo $getDetailPost['author']?></span>
            </div><br>
            <?php }?>
            
        </div>