<div class=" main-top">
<?php foreach($getVanHoas as $getVanHoas ) {?>
    <div class="row" style="margin: 0;">
        <div class="title-post">
        <h4 style="   "><?php echo $getVanHoas['name']?></h4>
        </div>
        <?php foreach( $getVanHoa as $getVanHoa){?>
        <div class="col-md-3 bai-viet-top">
            <div class="o">
                <div class="bai-viet-top_">
                <div style="text-align: center;">
                    <img class="img-fluid img-fluid_ " src="<?php echo $level.IMG .$getVanHoa['image']?>" alt="">
                    </div>
                    <div class="content">
                        <div class="content_">
                            <a href="<?php echo $level.PAGES.'detail.php?id=' .$getVanHoa['id']?>" class="tieu-de">
                                <?php echo $getVanHoa['title'];?>
                            </a>
                            <div class="thoi-gian">
                                <i class="fa fa-clock">
                                    <?php echo date("d/m/Y h:i",strtotime($getVanHoa['datetime']));?></i> | by Admin
                            </div>
                            <span class="noi-dung-ngan-bv">
                            <?php echo $getVanHoa['content'];?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="xem-tat-ca">
            <a href="<?php echo $level.PAGES.'page_cat.php?id='.$getVanHoas['id']?>" class="previous btn-xem-tat-ca">Xem tất cả</a>
        </div>
    </div>
    <?php }?>
</div>