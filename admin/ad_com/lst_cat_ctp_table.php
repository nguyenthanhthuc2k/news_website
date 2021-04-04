<div class="tbl">
    <div class="menu-tbl row">
        <div class="col-md-6">
            <h6 class="noi-dung-tbl-r">Menu bài viết</h6>
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group flex-nowrap">
                    <input type="text" maxlength="15" class="form-control" style="border-bottom-left-radius: 25px;
    border-top-left-radius: 25px;" name="addnameCat" placeholder="Thêm mới" aria-label=""
                        aria-describedby="addon-wrapping">
                    <button class="btn btn-them-moi" name="save-add">Lưu
                    </button>
                </div>

            </form>
        </div>
    </div>
    <div class="table-ds">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col"  style="width:400px;">Tên</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>

            <tbody id="loadajax">
                <?php foreach($Menus as $Menu) { ?>
                <tr >
                    <th scope="row">
                        <?php echo $Menu['id']?>
                    </th>
                    <td >
                        <div class="accordion-item" style="width:100%;">
                            <h2 class="accordion-header" id="heading-<?php echo $Menu['id']?>">
                            <button style=" color: black;border: none;"class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $Menu['id']?>" aria-expanded="false" aria-controls="collapse-<?php echo $Menu['id']?>">
                                <?php echo $Menu['name']?>
                            </button>
                            </h2>
                            <div id="collapse-<?php echo $Menu['id']?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $Menu['id']?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="" method="post">
                                    <div class="input-group">
                                    <input type="hidden" name="getid" value="<?php echo $Menu['id']?>">
                                    <input type="text" name="title_edit" maxlength="15" class="form-control" aria-label="" placeholder="Thay đổi" >
                                    <button name="btn_save_edit_title"style="margin: 0;
                                                color: white; background-color: #218c8d;"class="btn btn-primary">Lưu
                                    </button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="getid" value="<?php echo $Menu['id']?>">
                            <?php if($Menu['status']=='1'){
                        echo'<button type="unblock" class="btn btn-primary " name="btn-block" data-toggle=" tooltip" title="Delete">
                        <i class="fas fa-lock-open    "></i></button>';
                        }else{
                            echo'
                            <button type="block" class="btn btn-danger " name="btn-unBlock" data-toggle=" tooltip" title="Delete">
                            <i class="fas fa-lock    "></i>
                            </button>';
                        }?>
                        </form>
                    </td>
                    <td>
                        <span>
                            <form action="" method="post">
                                <button class="btn btn btn-danger" onclick="confirm('Bạn có muốn xóa hay không ?')" name="btn-del" value="<?php echo $Menu['id']?>">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </span>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>