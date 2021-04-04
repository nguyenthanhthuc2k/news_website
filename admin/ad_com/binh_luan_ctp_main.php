<div class="tbl">
        <div class="frm-search row">
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                </div>
                <div class="option w-100">
                    <select class="select w-100 form-select" name="" id="status_post" onchange="filter_id()">
                        <option value="2">Tất cả trạng thái</option>
                        <option value="1">Đã duyệt</option>
                        <option value="0">Chờ duyệt</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                    <i class="fa fa-book" aria-hidden="true"></i>
                </div>
                <div class="option w-100 ">
                    <div class="select w-100" name="" id="">
                        <input onkeypress="return isNumberKey(event)" onchange="filter_id()" id="id_post" name="id_post" class="form-control" type="text" placeholder="Nhập ID bài viết">
                    </div>
                </div>
            </div>
        </div>
    <div class="menu-tbl">
        <div class="menu-tbl_ menu-tbl-r">
            <h6 class="noi-dung-tbl-r">Danh sách bình luận</h6>
        </div>
    </div>
    <div class="table-ds">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Người dùng</th>
                    <th scope="col">ID bài viết</th>
                    <th scope="col" style="width: 45%;">Nội dung</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">IP Adress</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody id="loadajax">
                <?php foreach($getAllBinhLuan as $getAllBinhLuan){?>
                <tr >
                    <th scope="row"><?php echo $getAllBinhLuan['id']?></th>
                    <td><?php echo $getAllBinhLuan['author']?></td>
                    <td><?php echo $getAllBinhLuan['id_post']?></td>
                    <td><?php echo $getAllBinhLuan['content']?></td>
                    <td><?php echo $getAllBinhLuan['datetime']?></td>
                    <td><?php echo $getAllBinhLuan['ip']?></td>
                    <td id="btn-status<?php echo $getAllBinhLuan['id']?>">
                        <form action="" method="POST">
                            <?php  if($getAllBinhLuan['status']==1){
                                echo'<button type="button" class="btn btn-primary" onclick="btn_block('.$getAllBinhLuan["id"].')" id="btn-block'.$getAllBinhLuan["id"].'">
                                 <i class="fas fa-lock-open"></i>
                               </button>';
                            }else{
                                echo'<button class="btn btn-danger" type="button" onclick="btn_unblock('.$getAllBinhLuan["id"].')" id="btn-block'.$getAllBinhLuan["id"].'">
                                <i class="fas fa-lock"></i>
                              </button>';
                            }
                                ?>
                        </form>
                    </td>   
                    <td>
                        <span>
                            <button class="btn btn btn-warning" type="button" onclick="confirm_del(<?php echo $getAllBinhLuan['id']?>)" id="btn_del<?php echo $getAllBinhLuan['id']?>">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </span>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="dot">
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round active">1</a>
        <a href="#" class="next round">2</a>
        <a href="#" class="next round">&#8250;</a>
    </div>
</div>