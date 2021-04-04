<div class="tbl">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class=" row">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="col-md-8" style="margin-bottom: 10px;">
                <input name="editTitle" class="form-control"id="" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;"placeholder="Tiêu đề "
                    value="<?=$title_bv?>"></input>
                    <input name="note" id="note" class="form-control" style="    margin-bottom: 10px;
            padding: 5px; width: 100%;"placeholder="Ghi chú"
                   value="<?=$note?>" ></input> 
                   <input name="link_ad" id="link_ad" class="form-control" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;"placeholder="Link quảng cáo"
                   value="<?=$link?>" ></input>
                <textarea name="ckeditor" id=""  class="form-control" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;" rows="2"value="">
                    <?=$content?></textarea>
            </div>
            <div class="col-md-4">  
                <section>
                <label for="">Chi phí (VNĐ)</label>
                <input name="chi_phi" id="chi_phi" class="form-control" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;" placeholder="Chi phí cho thuê quảng cáo"
                   value="<?=$chi_phi?>"type="number" ></input>
                <label for="">Ngày bắt đầu thuê</label>
                <input name="ngay_bat_dau" id="so_ngay_thue" class="form-control" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;" placeholder="Số ngày thuê"
                   value="<?=$ngay_bat_dau?>"type="date" ></input>
                   <label for="">Ngày kết thúc</label>
                   <input name="ngay_ket_thuc" id="ngay_ket_thuc" class="form-control" style="    margin-bottom: 10px;
            padding: 5px;width: 100%;"placeholder="Số ngày thuê"
                   value="<?=$ngay_ket_thuc?>"type="date" ></input>
                    <label style="padding: 10px 0px;" for="">Ảnh đại diện </label>
                    <!-- gọi sk preview ảnh khi chọn ảnh-->
                    <input onchange="preview_img(event)" type="file" class="form-control m-input" id="imgInp"
                        name="image" style="font-size: 11px;">
                    &nbsp;
                    <div class=" image">
                        <img id="img" alt="" src="<?php echo $level.IMG;?><?=$image?>">
                    </div>

                </section>
                <div style=" text-align: center;">
                    <button class="upload" type="submit" name="<?=$btn?>">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </form>
</div>


<div class="modal d-none" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>