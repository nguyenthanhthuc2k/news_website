<div class="row" style="  height: 100vh;">
    <div class="col-md-2 menu">
        <div class="menu-right">
            <div class="dash">
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <div class="lst-menu">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Quản lí bài viết
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>add_post.php">Thêm bài viết</a>
                                                    </li>
                                                    <li><a href=" <?php echo $level.PAGES_AD;?>lst_post.php">Danh sách bài viết</a>
                                                    </li>
                                                    </li>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>lst_type_post.php">Loại
                                                            bài viết
                                                    </li>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>lst_cat.php">Chủ
                                                            đề</a></li>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>lst_binh_luan.php">Bình luận</a>
                                                    </li><li><a href="<?php echo $level.PAGES_AD;?>lst_slide.php">Quảng cáo lớn</a>
                                                    </li>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>lst_qc2_slide.php">Quảng cáo nhỏ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_user"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Quản lí tài khoản
                                            </button>
                                        </h2>
                                        <div id="collapse_user" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>lst_user.php">Danh sách user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Quản lí hệ thống
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>setting.php">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Quản trị
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><a href="?logout">Đăng xuất</a>
                                                    </li>
                                                    <li><a href="<?php echo $level.PAGES_AD;?>password.php">Thông
                                                            tin</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>

    </div>