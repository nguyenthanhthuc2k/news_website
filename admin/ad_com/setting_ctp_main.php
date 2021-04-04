<div class="row container " style="    border-radius: 5px;
    background: white;
    box-shadow: -2px 0px 20px 0px #0000001a;
    padding: 0;">
    <?php foreach($getSetting as $getSetting) {?>
    <div class="col-md-6">
        <div class="row col-md-12" style="margin-top: 11px;">
            <h6>Địa chỉ liên hệ</h6>
            <div class="accordion-item">
                <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;" id="headingTwo">
                    <button class="accordion-button collapsed" style="color: black;" type="submit"
                        data-bs-toggle="collapse" data-bs-target="#dia-chi" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $getSetting['address']; ?>
                    </button>
                </h2>
                <div id="dia-chi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" maxlength="255" class="form-control" name="address"
                                    value="<?php echo $getSetting['address']; ?>" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" name="btn-address" type="submit"
                                    id="button-addon2">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="margin-top: 11px;">
            <h6>Tiêu đề website</h6>
            <div class="accordion-item">
                <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;" id="headingTwo">
                    <button class="accordion-button collapsed" style="color: black;" type="submit"
                        data-bs-toggle="collapse" data-bs-target="#tieu-de" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $getSetting['title']; ?>
                    </button>
                </h2>
                <div id="tieu-de" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" maxlength="255" class="form-control" name="title"
                                    value="<?php echo $getSetting['title']; ?>" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" name="btn-title" type="submit"
                                    id="button-addon2">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="margin-top: 11px;">
            <h6>Số điện thoại</h6>
            <div class="accordion-item">
                <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;" id="headingTwo">
                    <button class="accordion-button collapsed" style="color: black;" type="submit"
                        data-bs-toggle="collapse" data-bs-target="#so-dt" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $getSetting['phone']; ?>
                    </button>
                </h2>
                <div id="so-dt" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" maxlength="255" class="form-control" name="phone"
                                    value="<?php echo $getSetting['phone']; ?>" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" name="btn-phone" type="submit"
                                    id="button-addon2">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="margin-top: 11px;">
            <h6>Email liên hệ</h6>
            <div class="accordion-item">
                <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;" id="headingTwo">
                    <button class="accordion-button collapsed" style="color: black;" type="submit"
                        data-bs-toggle="collapse" data-bs-target="#email" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $getSetting['mail']; ?>
                    </button>
                </h2>
                <div id="email" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" maxlength="255" class="form-control" name="mail"
                                    value="<?php echo $getSetting['mail']; ?>" placeholder=" Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" name="btn-mail" type="submit"
                                    id="button-addon2">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="margin-top: 11px;">
            <h6>Giới thiệu ngắn</h6>
            <div class="accordion-item">
                <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;" id="headingTwo">
                    <button class="accordion-button collapsed" style="color: black;" type="submit"
                        data-bs-toggle="collapse" data-bs-target="#gioi-thieu-ngan" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <?php echo $getSetting['about']; ?>
                    </button>
                </h2>
                <div id="gioi-thieu-ngan" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" maxlength="255" class="form-control" name="about"
                                    value="<?php echo $getSetting['about']; ?>" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" name="btn-about"
                                    id="button-addon2">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#facebook" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link facebook
                        </button>
                    </h2>
                    <div id="facebook" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-facebook']; ?>" name="fb"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" name="btn-fb" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#youtube" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link youtube
                        </button>
                    </h2>
                    <div id="youtube" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-youtube']; ?>" name="ytb"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" name="btn-ytb" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#pinterest" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link map
                        </button>
                    </h2>
                    <div id="pinterest" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-map-address']; ?> " name="map" a
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" name="btn-map" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#twitter" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link twitter
                        </button>
                    </h2>
                    <div id="twitter" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-twitter']; ?>"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2" name="twitter">
                                    <button class="btn btn-outline-secondary" name="btn-twitter" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#intro" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link intro
                        </button>
                    </h2>
                    <div id="intro" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-video-intro']; ?>" a
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2" name="intro">
                                    <button class="btn btn-outline-secondary" name="btn-intro" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 11px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="  border: 1px solid #ced4da;border-radius: 5px;"
                        id="headingTwo">
                        <button class="accordion-button collapsed" style="color: black;" type="submit"
                            data-bs-toggle="collapse" data-bs-target="#instagram" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Link instagram
                        </button>
                    </h2>
                    <div id="instagram" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="255" class="form-control"
                                        value="<?php echo $getSetting['link-instagram']; ?>" a
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="button-addon2" name="instagram">
                                    <button class="btn btn-outline-secondary" name="btn-instagram" type="submit"
                                        id="button-addon2">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="margin-top: 11px;">
            <section>
                <form action="" method="post" enctype="multipart/form-data">
                    <label style=" padding: 10px 0px;" for="">Logo </label>
                    <input onchange="preview_img(event)" type="file" class="form-control m-input" id="imgInp"
                        name="logo" style=" font-size: 11px;">
                    &nbsp;
                    <div class="image">
                        <img id="img" src="<?php echo $level.IMG;?><?php echo $getSetting['img-logo'];?>">
                    </div>
                    <div style="text-align: center;">
                        <button class="upload" type="submit" value="save" name="btn-logo">Lưu thay đổi</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
    <?php } ?>
</div>