<script type="text/javascript">
//kiểm tra không nhập chữ//
function isNumberKey(event){
    var charCode =(event.which) ? event.which : event.keyCode
    if(charCode >31 &&(charCode <48 || charCode >57))
        return false;
    return true;
}
function btn_block(id){
    //lấy id cmt
    var id = id;
    //id nút update
    const btn = document.getElementById('btn-block'+id).value;
    //tạo url sang API
    var urlApi = "<?php echo $level.API;?>ad_binhluan.php";
    //khởi tạo dt ajax
    var xhttp = new XMLHttpRequest();
    //cấu hình , phương thức
    xhttp.open("POST",urlApi);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //gửi gửi dữ liệu
    xhttp.send('id_block='+ id + '&btn-block='+btn);
    var html ='';
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var statusCmt = JSON.parse(this.responseText);
                for(var i = 0 ; i < statusCmt.length;i++ ){
                    html+='<form action="" method="POST">';
                     if(statusCmt[i].status == 0){ 
                    html += '<button class="btn btn-danger" type="button" onclick="btn_unblock('+ statusCmt[i].id +')" id="btn-block' +  statusCmt[i].id + '"><i class="fas fa-lock"></i></button>';
                    }
                    if(statusCmt[i].status == 1){ 
                    html += '<button type="button" class="btn btn-primary" onclick="btn_block('+statusCmt[i].id +')" id="btn-block'+ statusCmt[i].id+'"><i class="fas fa-lock-open"></i></button>'
                    }
                html += '</form>'
                document.getElementById('btn-status'+id).innerHTML = html;
            }
            
    }  
}
}
// mở khóa
function btn_unblock(id){
    //lấy id cmt
    var id = id;
    //id nút update
    const btn = document.getElementById('btn-block'+id).value;
    //tạo url sang API
    var urlApi = "<?php echo $level.API;?>ad_binhluan.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST",urlApi);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id_unblock='+ id + '&btn-unblock='+btn);
    var html ='';
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var statusCmt = JSON.parse(this.responseText);
                for(var i = 0 ; i < statusCmt.length;i++ ){
                    html+='<form action="" method="POST">';
                     
                    if(statusCmt[i].status == 1){ 
                    html += '<button type="button" class="btn btn-primary" onclick="btn_block('+statusCmt[i].id +')" id="btn-block'+ statusCmt[i].id+'"><i class="fas fa-lock-open"></i></button>'
                    }if(statusCmt[i].status == 0){ 
                    html += '<button class="btn btn-danger" type="button" onclick="btn_unblock('+ statusCmt[i].id +')" id="btn-block' +  statusCmt[i].id + '"><i class="fas fa-lock"></i></button>';
                    }
                html += '</form>'
                document.getElementById('btn-status'+id).innerHTML = html;
            }   
    }  
}
}
// xóa bình luận
function confirm_del(id){
    if(confirm('Sẽ không thể khôi phục lại được! Bạn có muốn xóa không ?')==true){
    var id = id;
    //id nút del
    const btn = document.getElementById('btn_del'+id).value;
    //tạo url sang API
    var urlApi = "<?php echo $level.API;?>ad_binhluan.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST",urlApi,true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id_del='+ id + '&btn-del='+btn);
    var html ='';
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var loadcmt = JSON.parse(this.responseText);
            console.log( loadcmt)
            if(loadcmt.length>0){
                for(var i = 0 ; i < loadcmt.length;i++ ){
                    html+='<th scope="row">' +loadcmt[i].id +'</th><td>'+ loadcmt[i].author+'</td><td>'+loadcmt[i].id_post +'</td><td>'+loadcmt[i].content+'</td><td>'+loadcmt[i].datetime+'</td><td>'+loadcmt[i].ip+'</td><td id="btn-status'+loadcmt[i].id+'"><form action="" method="POST">';
                    if(loadcmt[i].status == 1){
                    html+= '<button type="button" class="btn btn-primary"onclick="btn_block('+loadcmt[i].id+')" id="btn-block'+loadcmt[i].id+'"><i class="fas fa-lock-open"></i></button>';
                    }else{
                        html+='<button class="btn btn-danger" type="button" onclick="btn_unblock('+loadcmt[i].id+')" id="btn-block'+loadcmt[i].id+'"><i class="fas fa-lock"></i></button>';
                        } 
                    html+='</form></td><td> <span><button type="button"class="btn btn btn-warning" onclick="return confirm_del('+ loadcmt[i].id+')" id="btn_del'+loadcmt[i].id+'"><i class="far fa-trash-alt"></i></button></span></td></tr>'
                   
                }    document.getElementById('loadajax').innerHTML = html; 
            }
            }
            // 
        }
    }
    
}
// lọc bình luận
function filter_id(){
    //lấy id bài viết người dủng nhập
    var id_post = document.getElementById('id_post').value;
    //lay value status
    var status_post = document.getElementById('status_post').value;
    
    //link tới api
    var url_api = "<?php echo $level.API;?>ad_filter_binh_luan.php";   
    //tạo 1 đối tượng ajax
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST",url_api);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //gửi dử liệu
    xhttp.send('id_post='+id_post+'&status_post='+status_post);
    //tạo biến chứa chuổi html
    var html='';
    // alert(status_post);
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            //kq trả về =>json
            var loadcmt_filter_id = JSON.parse(this.responseText);
            if(loadcmt_filter_id.length>0){ 
                for(var i = 0 ; i < loadcmt_filter_id.length; i++ ){
                // table chưa data
                html+='<th scope="row">' +loadcmt_filter_id[i].id +'</th><td>'+ loadcmt_filter_id[i].author+'</td><td>'+loadcmt_filter_id[i].id_post +'</td><td>'+loadcmt_filter_id[i].content+'</td><td>'+loadcmt_filter_id[i].datetime+'</td><td>'+loadcmt_filter_id[i].ip+'</td><td id="btn-status'+loadcmt_filter_id[i].id+'"><form action="" method="POST">';
                    if(loadcmt_filter_id[i].status == 1){
                    html+= '<button type="button" class="btn btn-primary"onclick="btn_block('+loadcmt_filter_id[i].id+')" id="btn-block'+loadcmt_filter_id[i].id+'"><i class="fas fa-lock-open"></i></button>';
                    }else{
                        html+='<button class="btn btn-danger" type="button" onclick="btn_unblock('+loadcmt_filter_id[i].id+')" id="btn-block'+loadcmt_filter_id[i].id+'"><i class="fas fa-lock"></i></button>';
                        } 
                    html+='</form></td><td> <span><button type="button"class="btn btn btn-warning" onclick="return confirm_del('+ loadcmt_filter_id[i].id+')" id="btn_del'+loadcmt_filter_id[i].id+'"><i class="far fa-trash-alt"></i></button></span></td></tr>'   
            }
            }else{
                html+='<p> Không tìm thấy kết quả';
            }
            //in ra giao dien
            document.getElementById('loadajax').innerHTML = html;  
            // alert(html);
        }
    }
}
</script>
