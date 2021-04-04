<div class="tbl">
    <div class="menu-tbl">
        <div class="menu-tbl_ menu-tbl-r">
            <h6 class="noi-dung-tbl-r">Danh sách bài viết</h6>
        </div>
        <div class="menu-tbl_ menu-tbl-l">
          <a href="<?php echo $level.PAGES_AD;?>edit_slide.php"class="btn btn-them-moi" class="btn btn-primary" >
                <span id="btn_add">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Thêm mới</span>
                </span>
            </a>
        </div>
    </div>
    <div class="table-ds">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên slide</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Thời gian bắt đầu</th>
                    <th scope="col">Thời gian kết thúc</th>
                    <th scope="col">Chi phí (VN)</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($getSlides as $getSlide)
                {?>
                <tr>
                    <th scope="row"><?php echo $getSlide['id']?></th>
                    <td><?php echo $getSlide['title']?></td>
                    <td><?php echo $getSlide['content']?></td>
                    <td><?php echo $getSlide['ngay_bat_dau']?></td>
                    <td><?php echo $getSlide['ngay_ket_thuc']?></td>
                    <td><?php echo $getSlide['chi_phi']?></td>
                    <td><?php echo $getSlide['note']?></td>

                    <td>
                        <div><img style="width: 300px;height: auto;"
                                src="<?php echo $level.IMG;?><?php echo $getSlide['image']?>" alt=""></div>
                    </td>
                    <td>
                        <form action='' method='post'>
                            <input hidden name="getid" value="<?php echo $getSlide['id'];?>">
                            <?php if($getSlide['status']==1)
                        echo '
                        <button type="submit" class="btn btn-primary" name="btn-block" value=""><i class="fas fa-lock-open"></i></button>';
                        else{
                        echo'
                        <button type="submit" class="btn btn-danger" name="btn-unblock"
                            value=""><i class="fas fa-lock"></i></button>';
                        }
                        ?>
                        </form>
                    </td>
                    <td>
                        <a href="<?php echo $level.PAGES_AD.'edit_slide.php?id='.$getSlide['id']?>">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#sua-slide" id="btn-edit">
                                <i class=" far fa-edit"></i>
                            </button>
                        </a>
                         <form action="" method="post">
                            <input type="hidden" name="getid" value="<?php echo $getSlide['id'];?>">
                            <button type="submit" class="btn btn-success" onclick="return confirm('Bạn có muốn xóa không')" data-bs-toggle="modal"
                                    data-bs-target="btn-del" name="btn-del">
                                    <i class=" far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>

        </table>
    </div>