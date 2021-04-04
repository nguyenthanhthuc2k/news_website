<div class="row" style="margin-top: -20px;">
    <div class="col-md-9">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <!-- button slide -->
            <div class="carousel-indicators">
                <?php $i = 0;
                foreach($get3Slide as $get3Slider){
                 ?>                
                <button type="button"  
                <?php if($i ==0 ){
                    echo"class='active' aria-current='true'";
                }?> 
                data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>" 
                    aria-label="Slide 1">
                <?php  $i++; }?>
                    </button>

            </div>
            <!-- Slide IMAGE -->
            <div class="carousel-inner">
                <?php $i = 0;
                    foreach($get3Slide as $get3Slide) {
                    if($i == 0){
                        echo "<div class='carousel-item active'>";
                    }else{
                        echo "<div class='carousel-item'>";
                    }
                    ?>
                <?php $i++;?>
                <a href="<?php echo $get3Slide['link_ad']?>" class="d-block w-100" >  <img src="<?php echo $level.IMG.$get3Slide['image']?>" style="height:600px;
                    object-fit: cover; width: 100%;"alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h2><?php echo $get3Slide['title']?></h2>
                        <h5><?php echo $get3Slide['content']?></h5>
                    </div>
                </div>
                <?php }?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-3">
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