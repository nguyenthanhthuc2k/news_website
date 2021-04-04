<div class="">
    <h6>Để lại bình luận ( bình luận của bạn sẽ được hiển thị sau khi được duyệt )</h6>

    <div class="binh-luan">
        <div class="col-md-1 x">
            <img class="img-add" src="<?php echo $level.IMG;?>avatar_cmt.png" alt="">
        </div>
        <div class="col-md-11 x">
            <form action="" method="post">
                <input class="form-control" type="text" name="" id="author" placeholder="Họ và tên"><br>
                <div class="input-group mb-3">
                    <input type="text" maxlength="255" class="form-control p-3" id="content" placeholder="Nội dung bình luận"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="button" class="btn btn-primary" style="z-index: 1;"
                        onclick="addCmt(<?php echo $getDetailPost['id']?>)" name="send" id="send" value="Send">
                </div>

            </form>

        </div>
    </div>

</div>
<div class="danh-sach-binh-luan">
    <h6>Bình luận của đọc giả</h6>
    <section id="lst-comment">
        <?php foreach($getComments as $getComment){?>
        <div class="binh-luan">
            <div class="col-md-1 x">
                <img class="img-add" src="<?php echo $level.IMG;?>avatar_cmt.png" alt="">
            </div>
            <div class="col-md-11 x">
                <h6><?php echo $getComment['author'] ?> |
                    <span
                        style="  font-size: 12px;"><?php echo date("d/m/Y h:i",strtotime($getComment['datetime']));?></span>
                </h6>
                <p style="margin: 0;"><?php echo $getComment['content'] ?></p>
                <a href="" style="font-size: smaller;">Trả lời</a>
                <a href="" style="font-size: smaller;">Ẩn</a>
                <!-- <div class="binh-luan repCmt" id="">
                    <div class="col-md-1 x">
                        <img class="img-add" src="<?php echo $level.IMG;?>avatar_cmt.png" alt="">
                    </div>
                    <div class="col-md-11 x">
                        <form action="" method="post">
                            <input class="form-control" type="text" name="" id="author" placeholder="Họ và tên"><br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control p-3" id="content"
                                    placeholder="Nội dung bình luận" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <input type="button" style="z-index: -1;" class="btn btn-primary"
                                    onclick="addCmt(<?php echo $getDetailPost['id']?>)" name="send" id="send"
                                    value="Send"></input>
                            </div>

                        </form>

                    </div>
                </div> -->
            </div>
        </div>
        <?php }?>
    </section>
</div>

<div class="dot">
    <a href="#" class="previous round">&#8249;</a>
    <a href="#" class="next round active">1</a>
    <a href="#" class="next round">2</a>
    <a href="#" class="next round">&#8250;</a>
</div>
</div>