<!DOCTYPE html>
<html lang="en">
<?php
    //================== head ================ -->
    require_once($level.AD_COM.'layout_head.php');
?>
<body>
    <main>
        <?php
        //================== layout header ============== -->
        require_once($level.AD_COM.'layout_header.php');
        //================== layout menu ================ -->
        require_once($level.AD_COM.'layout_menu.php');
        //================== layout index =============== -->
        require_once($level.AD_COM.'layout_breadcrumb.php');
        //================== content =============== -->
        require_once($_main);
        //================== footer =============== -->
        require_once($level.AD_COM.'layout_footer.php');
        ?>
    </main>
</body>
<?php
    //================== layout script ================ -->
    require_once($level.AD_COM.'layout_script.php');
?>
</html>