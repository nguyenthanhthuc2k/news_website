<div class="tbl">
    <div class="menu-tbl row">
        <div class="col-md-6">
            <h6 class="noi-dung-tbl-r">Menu bài viết</h6>
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group flex-nowrap">

                    <input type="text" maxlength="15" name="nametype" style="border-bottom-left-radius: 25px;
    border-top-left-radius: 25px;" class=" form-control" placeholder="Thêm mới" aria-label=""
                        aria-describedby="addon-wrapping">
                    <button name="save-name-type" class="btn btn-them-moi">Lưu
                    </button>
                </div>

            </form>
        </div>
    </div>
    <div class="table-ds">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 40%;">Tên loại</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Tổng số bài viết</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach($getTypePosts as $getTypePost) {?>
                <tr>
                    <th scope="row"><?php echo $getTypePost['id'] ?></th>
                    <td>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-<?php echo $getTypePost['id'] ?>">
                                <button style="  color: black;  border: none;" class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo-<?php echo $getTypePost['id'] ?>"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <?php echo $getTypePost['name'] ?>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo-<?php echo $getTypePost['id'] ?>"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-<?php echo $getTypePost['id'] ?>"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="padding:0;transition:2s;">
                                    <div class="w-100">
                                        <form action="" method="post">
                                            <div class="input-group pt-2">
                                                <input type="hidden" name="getid" id=""
                                                    value="<?php echo $getTypePost['id'] ?>">
                                                <input type=" text" maxlength="15" name="editTypePost" class="form-control"
                                                    placeholder="Thay đổi" aria-label="Recipients username"
                                                    aria-describedby="button-addon2">
                                                <button name="save-edit-type-post"
                                                    onclick="return confirm('Bạn có muốn thay đổi không?')"
                                                    class="btn btn-outline-secondary" style="margin: 0;
                                                color: white; background-color: #218c8d;"
                                                    id="button-addon2">Lưu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="getid" value="<?php echo $getTypePost['id']?>">
                            <?php if($getTypePost['status']=='1'){
                                echo'<button class="btn btn-primary" name="btn-block"><i class="fas fa-lock-open"></i></button>';
                            }
                            else{
                                echo'<button class="btn btn-danger" name="btn-unblock"><i class="fas fa-lock"></i></button>';
                            } ?>
                        </form>
                    </td>
                    <td>3278</td>
                    <td><form action="" method="post">
                        <button class="btn btn btn-warning" type="submit" onclick="return confirm('Bạn có muốn xóa không ?')" value="<?php echo $getTypePost['id']?>" name="btn-del">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>

        </table>

    </div>