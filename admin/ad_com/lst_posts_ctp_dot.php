
<div class="dot">
<span style="padding-right:10px;">Tổng <span><?=$_current_total_item?></span>/<span><?=$_total_item?></span></span>
    <!-- BƯỚC 2 xử lí nút về trang đầu -->
    <?php 
    //kiểm tra nếu trang hiện tại LỚN hơn 2 thì mới hiển thị nút về trang đầu
        if($_current_page > 2){
            $_first_page =1;
            ?>
    <a href="?item=<?=$_item_per_page?>&page=<?=$_first_page?>" class="previous round">&#8249;</a>
    <?php
    }
    ?>

    <!-- BƯỚC 1 Tạo biến đánh dấu số trang -->
    <?php for($num = 1; $num <= $_total_page ; $num++)
    {
        //  BƯỚC 4 xữ lí active cho nút chuyển trang
        if($num != $_current_page)
            {
        //  BƯỚC 3 xử lí chỉ xuất hiện 3 nút chuyển trang
        if($num > $_current_page -2 && $num < $_current_page +2){?>
    <!-- xuất số trang -->
    <a class="next round" href="?item=<?=$_item_per_page?>&page=<?=$num?>"><?=$num?></a>
    <?php
    } } else{
        ?>
    <!-- thêm class active khi đang ở trang hiện tại -->
    <a class="next round active" href="?item=<?=$_item_per_page?>&page=<?=$num?>"><?=$num?></a>
    <?php
    }}
    ?>

    <!--  BƯỚC 2 xử lí nút về trang đầu -->
    <?php 
    //kiểm tra nếu trang hiện tại bé hơn tổng trang trừ đi 2 thì mới hiển thị nút đến trang cuối
        if($_current_page < $_total_page - 2){
            $_end_page = $_total_page;
            ?>
    <a href="?item=<?=$_item_per_page?>&page=<?=$_end_page?>" class="previous round">&#8250;</a>
    <?php
    }
    ?>
    <!--<a href=" #" class="next round active">1</a> </a> -->
</div>
</div>
</div>