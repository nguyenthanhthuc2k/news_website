<header class="header-detail">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <div class="navbar-brand logo "><a href="<?php echo $level.'index.php'?>" class="logo_">
                    <?php foreach($getSetting as $getSettingheader){?>
                    <img style="margin:0;" src="<?php echo $level.IMG .$getSettingheader['img-logo']?>" alt=""
                        class="img-fluid">
                    <?php }?>
                </a></div>
            <!-- <div class="navbar-brand logo">NTT<a href="" class="logo_">code</a></div> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> MENU
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active-menu " aria-current="page" href="<?php echo $level.'index.php'?>"><i
                                style="margin-right: 5px;" class="fa fa-home" aria-hidden="true"></i>Trang chủ
                        </a>
                    </li>
                    <?php foreach($getCategories as $getCat){?>
                    <li class="nav-item dropdown-menus " name="btn-cat">
                        <a class="nav-link"
                            href="<?php echo $level.PAGES.'page_cat.php?id='.$getCat['id']?>"><?php echo $getCat['name']?></a>
                    </li>
                    <?php }?>
                </ul>
                <form class="d-flex" action="<?php echo $level.PAGES?>search.php" method="get">
                    <input class="form-control me-2" type="text" name="txtSearch" placeholder="Search"
                        aria-label="Search">
                        <button class="btn-tim btn-a-tim" type="submit" name="btnSearch">
                            <i class="fa fa-search" style=" color: white;" aria-hidden="true"></i>
                        </button>
                </form>
            </div>
        </div>
    </nav>
</header>
