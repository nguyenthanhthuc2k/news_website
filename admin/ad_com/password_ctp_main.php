<div class="row main-pass">
    <?php foreach($infoUser as $infoUser){?>
    <div class=" col-md-3">
        <div id="avatar_password" style="height:100%;">
            <div style="text-align:center;">
                <img class="img-fluid" id="avatar_img" id="img" src="<?php echo $level.IMG.$infoUser['avatar'] ?>">
            </div>
            <p>
                <?php echo $infoUser['username'];?>
            </p>
            <p><?php echo $infoUser['name'];?></p>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card text-center" style="height: 100%;">
            <div class="card-header" id="tab-menu">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active btn" aria-current="true" id="info">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn" id="pass">Mật khẩu</a>
                    </li>
                </ul>
            </div>
            <!-- ===========================Đổi info======================= -->
            <div class="card-body" id="card-info" style="display:block">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Hình ảnh
                            </label>
                            <div class="col-md-7">
                                <input type="file" onchange="preview_img(event)" class="form-control" name="image"
                                    id="">
                            </div>
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Họ và tên
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="name"
                                    value="<?php echo $infoUser['name'];?>" id="">
                            </div>
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Số điện thoại
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" value="<?php echo $infoUser['phone'];?>"
                                    name="phone" id="">
                            </div>
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Email
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="email" value="<?php echo $infoUser['mail'];?>"
                                    name="mail" id="">
                            </div>
                        </div>
                    </div>
                    <div style="    text-align: center;">
                        <button class="upload" type="submit" value="<?php echo $infoUser['username'];?>"
                            name="btn-update-info">Cập nhật</button>
                    </div>
                </form>
            </div>
            <!-- ===========================Đổi pass======================= -->
            <div class="card-body" id="card-pass" style="display:none">
                <form action="" method="post">
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Mật khẩu hiện tại
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" name="pass-present" id="">
                            </div>
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Mật khẩu mới
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" name="new-password" id="">
                            </div>
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="form-group row">
                            <label class="col-md-3" for="">
                                Nhâp lại mật khẩu mới
                            </label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" name="enter-password" id="">
                            </div>
                        </div>
                    </div>
                    <div style="    text-align: center;">
                        <button class="upload" type="submit" value="<?php echo $infoUser['username'];?>"
                            name="btn-update-pass">Cập nhật</button>
                    </div>

                </form>
            </div>
            <?php }?>
        </div>
    </div>
</div>