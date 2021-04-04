<div class="col-md-3">
<div>
    <div>
        <h2 style="
                font-family: overpass,Arial,sans-serif;"><i class="far fa-map-marker" aria-hidden="true"></i>Tin nóng
        </h2>
        <span></span>
    </div>

    <?php foreach($getBaiVietNong as $getBaiVietNong) {?>
    <article class="bai-viet-adds">
        <div class="row">
            <div class="col-md-4 img-post" style="text-align:center;">
                <img class="img_post_adds img-fluid" src="<?php echo $level.IMG.$getBaiVietNong['image']?>" alt="">
            </div>
            <div class="col-md-8 right">
                <a href="<?php echo $level.PAGES.'detail.php?id='.$getBaiVietNong['id']?>" class="tieu-de-adds">
                    <?php echo $getBaiVietNong['title']?>
                </a>
                <div class="thoi-gian-adds">
                    <i class="fa fa-clock-adds"> <?php echo date("d-m-Y",strtotime($getBaiVietNong['datetime']))?></i> | by Admin
                </div>
            </div>
        </div>
    </article>
    <?php }?>
</div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php 
                $n = 0 ;
                foreach($get3SlideQc2 as $btn){
                ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $n?>" <?php if($n==0){
                    echo 'class="active" aria-current="true"';
                }
                ?> aria-label="Slide 1"></button>
                <?php $n++; }?>
            </div>
            <div class="carousel-inner">
            <?php $n = 0;
            foreach($get3SlideQc2 as $getIMG) {
                if($n==0){
                    echo'<div class="carousel-item active">';
                    }else{
                        echo'<div class="carousel-item">'; 
                    }
                ?>
                <a href="https://www.facebook.com/thuc.nguyenthanh.thuc2402/" class="d-block w-100" > <img src="<?php echo $level.IMG.$getIMG['image'];?>"           style="height:600px;object-fit: cover; width: 100%;" alt="...">
                 </a>
                </div>
                <?php $n++;} ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</div>
</div>
</div>