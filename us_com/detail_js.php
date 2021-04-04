<script type="text/javascript">
function addCmt(id) {
    const author = document.getElementById('author').value;
    const content = document.getElementById('content').value;
    const btn = document.getElementById('send').value;
    const id_post = id;
    if (author == "" || content == "") {
        alert("Vui lòng nhập đầy đủ thông tin !!!");
    } 
    else {
        //tạo form chứa data
        var data = new FormData();
        data.append("author", author);
        data.append("content", content);
        data.append("id_post", id_post);
        data.append("btn", btn);
        // link den file api
        var urlApi = "<?php echo $level.API?>addCmt.php";
        // khoi tao doi tuong
        var xhttp = new XMLHttpRequest();
        //phương thức cấu hình request
        xhttp.open("POST", urlApi);
        //gửi dử liệu
        xhttp.send(data);
        // reset input sau khi send cmt
        document.getElementById('author').value = '';
        document.getElementById('content').value = '';
        //khai báo biến chưa nội dung cần in ra
        var html = '';
        //hàm nhận kết quả trả về //this
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var lstCmt = JSON.parse(this.responseText);
                if (lstCmt.length > 1) {
                    for (var i = 0; i < lstCmt.length; i++) {
                        html +='<div class="binh-luan"> <div class = "col-md-1 x"> <img class = "img-add"src="<?php echo $level.IMG?>avatar_cmt.png" alt=""> </div> <div class = "col-md-11 x"> <h6 >' + lstCmt[i].author + ' | <span style = "  font-size: 12px;" >'+ lstCmt[i].datetime+' </span> </h6> <p style = "margin: 0;" > '+ lstCmt[i].content +'</p> <a href = ""style = "font-size: smaller;" > Trả lời </a> <a href = ""style = "font-size: smaller;"> Ẩn </a> </div> </div>';
                        document.getElementById('lst-comment').innerHTML = html;
                    }
                }
            }
        }
    };
}
</script>