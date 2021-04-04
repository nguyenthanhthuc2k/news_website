<script type="text/javascript">
//preview image
var preview_img = function(event) {
    var img = document.getElementById('img_user');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.onload = function() {
        URL.revokeObjectURL(img.src)
    }
};
//khóa
function btn_block(id){
    var id = id;
    const btn = document.getElementById('id'+id).value;
    var urlApi = "<?php echo $level.API;?>ad_user.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST",urlApi,true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id+"&btn_block="+btn);
    var html ='';
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var statusUser = JSON.parse(this.responseText);
      if(statusUser.length > 0){
        for(var i = 0 ; i < statusUser.length; i++){
            html +='<form action="" method="post">'
            if(statusUser[i].status==1){
                html+='<button class="btn btn-primary" type="button"  onclick="btn_block('+statusUser[i].id+')" name="btn-block" id="id'+statusUser[i].id+'"><i class="fas fa-lock-open"></i></button>';
            }
            else if(statusUser[i].status==0){
                html+='<button class="btn btn-danger" type="button" onclick="btn_unblock('+statusUser[i].id+')" name="btn-unblock" id="id'+statusUser[i].id+'"><i class="fas fa-lock"></i></button>';
            } 
            html+='</form>'; 
            document.getElementById('loadajax'+id).innerHTML = html;
          }
          
      }
    }
  }
}
//mở khóa
function btn_unblock(id){
    var id = id;
    const btn = document.getElementById('id'+id).value;
    var urlApi = "<?php echo $level.API;?>ad_user.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST",urlApi);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id+"&btn_unblock="+btn);
    var html ='';
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var statusUser = JSON.parse(this.responseText);
      if(statusUser.length > 0){
          for(var i = 0 ; i < statusUser.length; i++){
            html +='<form action="" method="post">'
            if(statusUser[i].status==1){
                html+='<button class="btn btn-primary" type="button"  onclick="btn_block('+statusUser[i].id+')" name="btn-block" id="id'+statusUser[i].id+'"><i class="fas fa-lock-open"></i></button>';
            }
            else if(statusUser[i].status==0){
                html+='<button class="btn btn-danger" type="button" onclick="btn_unblock('+statusUser[i].id+')" name="btn-unblock" id="id'+statusUser[i].id+'"><i class="fas fa-lock"></i></button>';
            } 
            html+='</form>';
            document.getElementById('loadajax'+id).innerHTML = html;
          }
         
      }
    }
  };
}
</script>