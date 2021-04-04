<div class="tbl">
    <form action="" method="post" enctype="multipart/form-data">
        <div class=" row">
            <div class="col-md-8" style="margin-bottom: 10px;">
                <input id="" style="    margin-bottom: 10px;
            padding: 5px;
            width: 100%;"  maxlength="99" class="form-control"placeholder="Tiêu đề bài viết" name="title"></input>
                <div class="ck">
                    <textarea style="margin-bottom: 10px;" name="ckeditor" placeholder="Tiêu đề bài viết"></textarea>
                </div><br>
                <input type="text" name="author" id="" class="form-control" placeholder="Tác giả">
            </div>
            <div class="col-md-4">
                <div class="accordion accordion-flush" style="border: 1px solid #ced4da; border-radius: 5px;"
                    id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Chọn chuyên mục
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExampl e">
                            <div class="accordion-body">
                                <div class="row">
                                    <?php foreach($getCategories as $key => $getCategories){ ?>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="cat<?php echo $key?>">
                                            <input type="hidden" name="hf_cat<?php echo $key?>"
                                                value="<?php echo $getCategories['id']?>">
                                            <label class="form-check-label">
                                                <?php echo $getCategories['name']?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="chuyen-muc" style="  padding-top: 10px;padding-bottom: 5px;">
                    <select class="form-select" aria-label="x" name="type_post">
                        <!-- xuất list  option loại bài viết -->
                        <option select>Chọn Loại bài viết</option>
                        <?php foreach($getTypePosts as $getTypePost){ ?>
                        <option value="<?php echo $getTypePost['id']?>"><?php echo $getTypePost['name']?></option>
                        <?php } ?>
                    </select>
                </section>
                <section>
                    <label style=" padding: 10px 0px;" for="">Ảnh đại diện </label>
                    <input onchange="preview_img(event)" type="file" class="form-control m-input" id="imgInp"
                        name="image" style=" font-size: 11px;">
                    &nbsp;
                    <div class="image">
                        <img id="img">
                    </div>

                </section>

                <div style="    text-align: center;">
                    <button class="upload" type="submit" value="save" name="save">Đăng
                        ngay</button>
                </div>
            </div>
        </div>

    </form>

</div>
</div>