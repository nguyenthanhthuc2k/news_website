<!DOCTYPE html>
<html lang="en">

<?php
    //================== db.php ================ -->
    require_once($level.LIB.'db.php');
    
    //liên kết với lib
    require_once($level.LIB.'clsPosts.php');
    require_once($level.LIB.'clsCategories.php');
    require_once($level.LIB.'clsSetting.php');
    require_once($level.US_COM.'layout_pro.php');
    // =================== head
    require_once($level.US_COM.'layout_head.php');
?>

<body>
    <?php
        // =================== head
        require_once($level.US_COM.'layout_header.php');
    ?>

    <main class="container  page-detail">
        <?php
        // =================== main
            require_once($_main);
            require_once($level.US_COM.'layout_gr_icon.php');
        ?>
    </main>
    <?php
    // =================== footer
        require_once($level.US_COM.'layout_footer.php');
    // =================== script
        require_once($level.US_COM.'layout_script.php');
    ?>
</body>

</html>