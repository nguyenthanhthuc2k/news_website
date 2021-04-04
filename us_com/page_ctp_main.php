<div class="row">
    <?php foreach($getPostCats as $getPostCat){?>
    <div class="col-md-4 bai-viet-top">
        <div class="o">
            <div class="bai-viet-top_">
                <div style="text-align: center;">
                <img class="img-fluid img-fluid_ " src="<?php echo $level.IMG. $getPostCat['image'] ?>" alt="">
                </div>
               
                <div class="content">
                    <div class="content_">
                        <a href="<?php echo $level.PAGES.'detail.php?id=' .$getPostCat['id']?>" class="tieu-de">
                            <?php echo $getPostCat['title'] ?>
                        </a>
                        <div class="thoi-gian" style="font-size: x-small;">
                            <i class="fa fa-clock">
                                <?php echo date("d/m/Y h:i",strtotime($getPostCat['datetime']));?></i> | by Admin
                        </div>
                        <!-- <p class="noi-dung">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, sint laborum
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>

<div class="dot" style="padding-bottom: 20px;">
    <a href=" #" class="previous round">&#8249;</a>
    <a href="#" class="next round active">1</a>
    <a href="#" class="next round">2</a>
    <a href="#" class="next round">&#8250;</a>
</div>
</div>