<div class="tbl">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class=" row">
            <?php foreach($detailPost as $detailPost) {?>
            <input type="hidden" name="id" value="<?php echo $detailPost['id'] ?>">
            <div class="col-md-8" style="margin-bottom: 10px;">
                <input name="title" id="" style="    margin-bottom: 10px;
            padding: 5px;
            width: 100%;"  maxlength="99" placeholder="Tiêu đề bài viết" value="<?php echo $detailPost['title'] ?>"></input>
                <div class="ck">
                    <textarea style="margin-bottom: 10px;" name="ckeditor"
                        placeholder="Tiêu đề bài viết"><?php echo $detailPost['content'] ?></textarea>
                </div><br>
                <input type="text" name="author" id="" class="form-control" value="<?php echo $detailPost['author'] ?>" placeholder="Tác giả">
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
                                    <?php foreach($getAllCat as $key => $getAllCat){ ?>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="cat<?php echo $key?>">
                                            <input type="hidden" name="hf_cat<?php echo $key?>"
                                                value="<?php echo $getAllCat['id']?>">
                                            <label class="form-check-label">
                                                <?php echo $getAllCat['name']?>
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
                        <!-- xuất option loại bài viết của bài viết đang xem -->
                        <?php foreach($getDetailOption as $getDetailOptionx){?>
                        <option value="<?php echo $getDetailOptionx['id_post_type']?>">
                            <?php echo $getDetailOptionx['name_post_type']?></option>
                        <?php }?>
                        <!-- xuất list  option loại bài viết -->
                        <?php foreach($getAllTypePost as $getTypePost){ ?>
                        <option value=" <?php echo $getTypePost['id']?>"><?php echo $getTypePost['name']?>
                        </option>
                        <?php } ?>
                    </select>
                </section>
                <section>
                    <label style="padding: 10px 0px;" for="">Ảnh đại diện </label>
                    <!-- gọi sk preview ảnh khi chọn ảnh-->
                    <input onchange="preview_img(event)" type="file" class="form-control m-input" id="imgInp"
                        name="image" style="font-size: 11px;">
                    &nbsp;
                    <div class=" image">
                        <img id="img" alt="" src="<?php echo $level.IMG;?><?php echo $detailPost['image'] ?>">
                    </div>

                </section>
                <div style=" text-align: center;">
                    <button class="upload" type="submit" value="save" name="save">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </form>
    <?php } 
?>
</div>