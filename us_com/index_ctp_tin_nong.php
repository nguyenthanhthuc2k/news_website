<div class="col-md-8">
    <?php foreach($getHotPost as $getHotPost) {?>
    <article class="bai-viet row">
        <div class="col-md-8 img-post" style="padding-left: inherit;">
            <div style="    overflow: hidden;">
            <div style="text-align: center;">
                <img class="img img-fluid" style="height: 300px;width: 100%;object-fit: scale-down;"
                    src="<?php echo $level.IMG .$getHotPost['image']?>" alt="">
                    </div>
            </div>

            <div class="xem-ngay">
                <a href="<?php echo $level.PAGES.'detail.php?id=' .$getHotPost['id']?>" class="nut-xem-ngay">Xem
                    ngay</a>
            </div>
        </div>
        <div class="col-md-4  " style="background: #F7F7F7;">
            <a href="<?php echo $level.PAGES.'detail.php?id=' .$getHotPost['id']?>" class="tieu-de"
                style="font-size: x-large;">
                <?php echo $getHotPost['title']?>
            </a>
            <div class="thoi-gian">
                <i class="fa fa-clock"> <?php echo date("d/m/Y h:i",strtotime($getHotPost['datetime']));?></i> | by
                Admin
            </div>
            <span class="noi-dung">
                <?php echo $getHotPost['content']?>
            </span>
        </div>
    </article>
    <?php }?>
    <section class="row">
        <?php foreach($getHotPost2after as $getHotPost2after){?>
        <div class="col-md-4">
            <a href="<?php echo $level.PAGES.'detail.php?id=' .$getHotPost2after['id']?>" class="tieu-de-tin-noi-bat">
                <?php echo $getHotPost2after['title'] ?> </a>
            <div class="thoi-gian">
                <i class="fa fa-clock"> 5/10/2021</i> | by Admin
            </div>
            <span class="noi-dung-top-3"> <?php echo $getHotPost2after['content'] ?></span>
        </div>
        <?php }?>
    </section>
</div>
</div>