<div class="tbl">
    <form action="">
        <div class="frm-search row">
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                </div>
                <div class="option w-100">
                    <select class="select w-100 form-select" onchange="filter_post()" name="cat" id="cat">
                        <option value="0" select="select">Tất cả chủ đề</option>
                        <?php foreach($getCategories as $getCat) {?>
                        <option value="<?php echo $getCat['id']?>"><?php echo $getCat['name']?> </option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                <i class="fa fa-shield-alt" aria-hidden="true"></i>
                </div>
                <div class="option w-100">
                    <select class="select w-100 form-select" name="status" onchange="filter_post()" id="status">
                        <option value="2" select="select">Tất cả trạng thái</option>
                        <option value="1">Hoạt động</option>
                        <option value="0">Đã khóa</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                <i class="fa fa-clock" aria-hidden="true"></i>
                </div>
                <div class="option w-100 ">
                    <div class="select w-100 date">
                        <input class="form-control"  name="key" id="key" onchange="filter_post()" placeholder="Nhập thông tin tìm kiếm" type="text">
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-md-6 search ">
                <div class="icon ">
                <i class="fa fa-clock" aria-hidden="true"></i>
                </div>
                <div class="option w-100 ">
                    <div class="select w-100 date" >
                        <input class="form-control" name="id_bv" id="id_bv" onchange="filter_post()"  placeholder="Nhập id bài viết" type="text">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 search">
                <div class="icon">
                <i class="fa fa-clock" aria-hidden="true"></i>
                </div>
                <div class="option w-100 ">
                    <div class="select w-100 date"  >
                        <input class="date" type="date"name="date" id="date" onchange="filter_post()">
                    </div>
                </div>
            </div>
        </div>
    </form>