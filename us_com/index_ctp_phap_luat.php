<div class=" main-top">
<?php foreach($getPhapLuats as $getPhapLuats ) {?>
    <div class="row" style="margin: 0;">
        <div class="title-post">
        <h4 style="   "><?php echo $getPhapLuats['name']?></h4>
        </div>
        <?php foreach( $getPhapLuat as $getPhapLuat){?>
        <div class="col-md-3 bai-viet-top">
            <div class="o">
                <div class="bai-viet-top_">
                <div style="text-align: center;">
                    <img class="img-fluid img-fluid_ " src="<?php echo $level.IMG .$getPhapLuat['image']?>" alt=""> </div>
                    <div class="content">
                        <div class="content_">
                            <a href="<?php echo $level.PAGES.'detail.php?id=' .$getPhapLuat['id']?>" class="tieu-de">
                                <?php echo $getPhapLuat['title'];?>
                            </a>
                            <div class="thoi-gian">
                                <i class="fa fa-clock">
                                    <?php echo date("d/m/Y h:i",strtotime($getPhapLuat['datetime']));?></i> | by Admin
                            </div>
                            <span class="noi-dung-ngan-bv">
                            <?php echo $getPhapLuat['content']?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="xem-tat-ca">
            <a href="<?php echo $level.PAGES.'page_cat.php?id='.$getPhapLuats['id']?>" class="previous btn-xem-tat-ca">Xem tất cả</a>
        </div>
    </div>
    <?php }?>
</div>