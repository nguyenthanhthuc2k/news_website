<div style="padding:10px 0px"><span>Tìm thấy 
    </span><span> <?php echo $countkq?> </span><span> kết quả với từ khóa '</span><span><?php echo $key?>'</span></div>
<div class="row">
<?php foreach($ketqua as $ketqua) {?>
    <div class="col-md-3 bai-viet-top">
        <div class="o">
            <div class="bai-viet-top_">
                <div style="text-align: center;">
                <img class="img-fluid img-fluid_ " src="<?php echo $level.IMG. $ketqua['image']?>" alt="">
                </div>
               
                <div class="content">
                    <div class="content_">
                        <a href="<?php echo $level.PAGES.'detail.php?id=' .$ketqua['id']?>" class="tieu-de">
                        <?php echo $ketqua['title']?>
                        </a>
                        <div class="thoi-gian" style="font-size: x-small;">
                            <i class="fa fa-clock">
                            <?php echo date("d/m/Y h:i",strtotime($ketqua['datetime']));?></i> 
                            </i> | by Admin
                        </div>
                        <span class="noi-dung">
                        <?php echo $ketqua['content']?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</div>

<!-- <div class="dot" style="padding-bottom: 20px;">
    <a href=" #" class="previous round">&#8249;</a>
    <a href="#" class="next round active">1</a>
    <a href="#" class="next round">2</a>
    <a href="#" class="next round">&#8250;</a>
</div> -->
</div>