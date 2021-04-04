<div class="menu-tbl">
    <div class="menu-tbl_ menu-tbl-r">
        <h6 class="noi-dung-tbl-r">Danh sách bài viết</h6>
    </div>
    <div class="menu-tbl_ menu-tbl-l">
        <a href="<?php echo $level.PAGES_AD.'add_post.php'?>" class="btn btn-them-moi">
            <span>
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
                <th scope="col">ID</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Người đăng</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody id="loadajax">
            <?php
            foreach($lstPost as $post){
        ?>
            <tr >
                <th scope="row"><?php echo $post['id'];?></th>
                <td><?php echo $post['title'];?></td>
                <td><?php echo $post['datetime'];?></td>
                <td><?php echo $post['ctv'];?></td>
                <td><?php echo $post['author'];?></td>
                <td> <div><img style="    width: 200px;height: 120px;object-fit: cover;"src="<?php echo $level.IMG .$post['image'];?>" alt=""></div> </td>
                <td>
                    <form action='' method='post'>
                        <input hidden name="getid" value="<?php echo $post['id'];?>">
                        <?php if($post['status']==1)
                        echo '
                        <button type="submit" class="btn btn-primary" name="save-block" value="">Hoạt động</button>';
                        else if($post['status']==0){
                        echo'
                        <button type="submit" class="btn btn-danger" name="save-unblock"
                            value="">Chờ duyệt</button>';
                        }
                        ?>
                        
                    </form>
                </td>
                <td>
                    <span>
                            <button class=" btn btn btn-warning">
                            <a style="color: white;" href="<?php echo $level.PAGES.'detail.php?id=' .$post['id']?>" target="_blank">
                                <i class="far fa-eye"></i>
                                </a>
                            </button>
                            <button class="btn btn btn-danger">

                            <a style="color: white;"  href="<?php echo $level.PAGES_AD.'add_post.php?id='.$post['id']?>">
                                <i class="far fa-edit"></i>
                                </a>
                            </button>
                        
                        
                            <form action="" method="post">
                                <input type="hidden" name="getid" value="<?php echo $post['id'];?>">
                                <button class=" btn btn btn-success" name="delete"
                                    onclick="return confirm('Bạn có muốn xóa không?')"><i class=" far fa-trash-alt"></i>
                                </button>
                            </form>
                    </span>
                </td>
            </tr> 
            <?php
            }
        ?>

        </tbody>

    </table>

</div>