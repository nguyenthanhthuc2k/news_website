<div class="tbl">
    <div class="menu-tbl">
    <div class="menu-tbl_ menu-tbl-r">
        <h6 class="noi-dung-tbl-r">Danh sách bài viết</h6>
    </div>
    <div class="menu-tbl_ menu-tbl-l">
        <button class="btn btn-them-moi" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <span>
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Thêm mới</span>
            </span>
        </button>
    </div>
    </div>
            <!--========================= MODAL==================== -->
                        <!-- Modal -->
    <?php foreach($getAllUser as $infoUser) {?>
        <div class="modal fade" id="staticBackdrop<?php echo $infoUser['id'] ?>" data-bs-backdrop="static" 
            data-bs-keyboard="false"    tabindex="-1" aria-labelledby="staticBackdropLabel" 
            aria-hidden="true">
            <div class="modal-dialog" style="max-width: 70%;">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Thông tin <?php echo $infoUser['name'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="col-md-6">
                                <div class=""  style="width: 100%; text-align: center;">
                                    <img id="img_user" class="img-fluid"src="<?php echo $level.IMG;?>cause-4.jpg" alt="">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post">
                            <label class="info-label"for="">Hình ảnh</label> 
                            <input type="file" class="form-control" name="image" onchange="preview_img(event)"value="" id="">
                            <label class="info-label"for="">Họ và tên</label>
                            <input type="text" class="form-control"  name="name" value="<?php echo $infoUser['name'] ?>" id="">
                            <label class="info-label"for="">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $infoUser['phone'] ?>" id="">
                            <label class="info-label"for="">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $infoUser['address'] ?>" id="">
                            <label class="info-label"for="">Địa chỉ email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $infoUser['name'] ?>" id="mail">
                            <label class="info-label"for="">Tài khoản login</label>
                            <input type="text" class="form-control" name="user"  value="<?php echo $infoUser['username'] ?>"id="">
                            <label class="info-label"for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password"value="<?php echo $infoUser['password'] ?>" id="">
                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
            <!--  -->
    <div class="table-ds">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" >Tên CTV</th>
                    <th scope="col" >Tên đăng nhập</th>
                    <th scope="col" >Email</th>
                    <th scope="col" >Số điện thoại</th>
                    <th scope="col">Thời gian bắt đầu</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach($getAllUser as $getUser) {?>
                <tr>
                    <th scope="row"><?php echo $getUser['id'] ?></th>
                    <td><?php echo $getUser['name'] ?>
                    </td>
                    <td><?php echo $getUser['username'] ?></td>
                    <td><?php echo $getUser['mail'] ?></td>
                    <td><?php echo $getUser['phone'] ?></td>
                    <td><?php echo date("d-m-Y",strtotime($getUser['time'])) ?></td>
                    <td id="loadajax<?php echo $getUser['id'] ?>">
                        <form action="" method="post">
                            <?php if($getUser['status']=='1'){
                                echo'<button class="btn btn-primary" type="button"  onclick="btn_block('.$getUser["id"].')" name="btn-block" id="id'.$getUser["id"].'"><i class="fas fa-lock-open"></i></button>';
                            }
                            else{
                                echo'<button class="btn btn-danger" type="button" onclick="btn_unblock('.$getUser["id"].')" name="btn-unblock" id="id'.$getUser["id"].'"><i class="fas fa-lock"></i></button>';
                            } ?>
                        </form>
                    </td>
                    <td><form action="" method="post">
                        <button class="btn btn btn-warning"data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $getUser['id']?>" type="button" value="<?php echo $getUser['id']?>" name="btn-del">
                            <i class="far fa-edit"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>

        </table>

    </div>