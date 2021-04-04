<div class=" main-top">
<?php foreach($getDuLichs as $getDuLichs ) {?>
    <div class="row" style="margin: 0;">
        <div class="title-post">
            <h4 style="   "><?php echo $getDuLichs['name']?></h4>
        </div>
        <?php foreach( $getDuLich as $getDuLich){?>
        <div class="col-md-3 bai-viet-top" id="cat<?php echo $getDuLich['categories']?>">
            <div class="o">
                <div class="bai-viet-top_">
                <div style="text-align: center;">
                    <img class="img-fluid img-fluid_ " src="<?php echo $level.IMG .$getDuLich['image']?>" alt=""> </div>
                    <div class="content">
                        <div class="content_">
                            <a href="<?php echo $level.PAGES.'detail.php?id=' .$getDuLich['id']?>" class="tieu-de">
                                <?php echo $getDuLich['title'];?>
                            </a>
                            <div class="thoi-gian">
                                <i class="fa fa-clock"> 5/10/2021</i> | by Admin
                            </div>
                            <span class="noi-dung-ngan-bv">
                            <?php echo $getDuLich['content']?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?> 
        <div class="xem-tat-ca">
            <a href="<?php echo $level.PAGES.'page_cat.php?id='.$getDuLichs['id']?>" class="previous btn-xem-tat-ca">Xem tất cả</a>
        </div>
    </div>
    <?php }?>
</div>