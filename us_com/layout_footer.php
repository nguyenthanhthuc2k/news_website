    <!-- ===================   F O O T E R ======================= -->
    <footer class="">
        <div class="container">
            <div class="row foo">
                <?php foreach($getSetting as $getSetting) {?>
                <div class="col-md-4 foo-1 foo_">
                    <div class="navbar-brand logo"><a href="<?php echo $level.'index.php'?>" class="logo_"><img
                                src="<?php echo $level.IMG. $getSetting['img-logo']?>" alt="" class="img-fluid"></a>
                    </div>
                    <p> <?php echo $getSetting['about']?></p>
                    <div class="btn-group w-100">
                        <button type="button" class="btn btn-primary mt-1"> <a
                                href="<?php echo $getSetting['link-facebook']?>"><i class="fab fa-facebook-f"></i>
                                </i></a> </i>
                            </i></button>
                        <button type="button" class="btn btn-secondary mt-1"><a
                                href="<?php echo $getSetting['link-twitter']?>"><i class="fab fa-twitter">
                                </i></a></button>
                        <button type="button" class="btn btn-success mt-1"><a
                                href="<?php echo $getSetting['link-google']?>"><i class="fab fa-google-plus-g">
                                </i></a></button>
                        <button type="button" class="btn btn-danger mt-1">
                            <a href="<?php echo $getSetting['link-youtube']?>"><i class="fab fa-youtube">
                                </i></a></button>
                        <button type="button" class="btn btn-warning mt-1"><a
                                href="<?php echo $getSetting['link-instagram']?>"><i class="fab fa-instagram">
                                </i></a></button>
                        <button type="button" class="btn btn-info mt-1"><a
                                href="<?php echo $getSetting['link-pinterest']?>"><i class="fab fa-pinterest">
                                </i></a></button>
                    </div>
                </div>
                <div class="col-md-4 foo-2 foo_">
                    <h3>Giới thiệu</h3>
                    <div>
                        <iframe class="video" src="<?php echo $getSetting['link-video-intro']?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-4 foo-3 foo_">
                    <h3>Liên hệ với chúng tôi</h3>
                    <i class="fa fa-map-marker" aria-hidden="true">
                    </i><a href=""><?php echo $getSetting['address']?></a><br>
                    <i class="fa fa-phone" aria-hidden="true"></i><a
                        href="tel:<?php echo $getSetting['phone']?>"><?php echo $getSetting['phone']?></a><br>
                    <i class="fa fa-envelope" aria-hidden="true"></i><a
                        href="mailto:<?php echo $getSetting['mail']?>"><?php echo $getSetting['mail']?></a>
                    <br><br>
                    <div class="btn-group w-100 img-foo">
                        <button class="btn mt-1"><img class="img-fluid " src="<?php echo $level.IMG;?>person_1.jpg"
                                alt="" srcset="">
                        </button>
                        <button class="btn mt-1"><img class="img-fluid" src="<?php echo $level.IMG;?>person_3.jpg"
                                alt="" srcset="">
                        </button>
                        <button class="btn mt-1"><img class="img-fluid" src="<?php echo $level.IMG;?>person_2.jpg"
                                alt="" srcset="">
                        </button>
                        <button class="btn mt-1"><img class="img-fluid" src="<?php echo $level.IMG;?>person_1.jpg"
                                alt="" srcset="">
                        </button>
                        <button class="btn mt-1"><img class="img-fluid" src="<?php echo $level.IMG;?>person_2.jpg"
                                alt="" srcset="">
                        </button>
                    </div>

                </div>
                <?php }?>
            </div>
        </div>
        <div>
            <p style="text-align: center;
            font-size: small;
            background-color: #1fa67a;
            font-family: sans-serif;
            margin-bottom: 0;
            color:#a5d8c7;
            padding: 3px 0px;">Copyright © 2020 By CKC Cao Thắng Technical College
            </p>
        </div>
    </footer>