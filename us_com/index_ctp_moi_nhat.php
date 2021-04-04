<div class="row" style="padding-bottom: 50px;margin: 0;">
    <div class="col-md-4" style="padding-left: inherit;">
        <h4 style="padding: 10px 0px;">Mới nhất</h4>
        <?php foreach( $getNewPosts as $getNewPost){ ?>
        <article class="bai-viet-adds post-new">
            <div class="row">
                <div class="col-md-4 img-post">
                <div style="text-align: center;">
                    <img class="img_post_adds img-fluid" src="<?php echo $level.IMG .$getNewPost['image']?>" alt=""> </div>
                </div>
                <div class="col-md-8 content-bv">
                    <a href="<?php echo $level.PAGES.'detail.php?id='.$getNewPost['id'];?>" class="tieu-de-adds">
                        <?php echo  $getNewPost['title']?>
                    </a>
                    <div class="thoi-gian-adds">
                        <i class="fa fa-clock-adds">
                            <?php echo date("d/m/Y h:i",strtotime($getNewPost['datetime']));?></i> | by Admin
                    </div>
                </div>
            </div>
            <div>
                <span></span>
            </div>
        </article>
        <?php } ?>
        <div class="dot">
            <a href="#" class="previous round">&#8249;</a>
            <a href="#" class="next round active">1</a>
            <a href="#" class="next round">2</a>
            <a href="#" class="next round">&#8250;</a>
        </div>
    </div>