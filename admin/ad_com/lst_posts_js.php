<script type="text/javascript">
function filter_post(){
  const status = document.getElementById('status').value;
  const cat = document.getElementById('cat').value;
  const keys = document.getElementById('key').value;
  const date = document.getElementById('date').value;
  const id_bv = document.getElementById('id_bv').value;
  //link api
  url_api = "<?php echo $level.API;?>ad_filter_post.php";
  var html ='';
  //khởi tạo dt ajax
  var xhttp = new XMLHttpRequest();
  //cấu hinh
  xhttp.open("POST",url_api,true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //gửi data
  xhttp.send('status='+status+'&cat='+cat+'&key='+keys+'&date='+date+'&id_bv='+id_bv); 
  // kq
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var lstpost = JSON.parse(this.responseText);
      if(lstpost.length > 0){
        for(var i = 0; i < lstpost.length ;i++){
          html+='<tr ><th scope="row">'+ lstpost[i].id +'</th><td>'+lstpost[i].title +'</td><td>'+lstpost[i].datetime+'</td> <td>'+lstpost[i].ctv+'</td> <td>'+lstpost[i].author+'</td> <td> <img   style="    width: 200px;height: 120px;object-fit: cover;" src="<?php echo $level.IMG;?>'+lstpost[i].image+'" alt="">  </td><td><form action="" method="post"><input hidden name="getid" value="'+ lstpost[i].id+'">';
          if(lstpost[i].status == 1){
           html+='<button type="submit" class="btn btn-primary" name="save-block" value="">Hoạt động</i></button>';
          }
          else{
          html+='<button type="submit" class="btn btn-danger" name="save-unblock"value="">Chờ duyệt</button>';
          }
          html+='</form></td><td><span><a href=""><button class="btn btn btn-warning"><i class="far fa-eye"></i></button>';
          html+='</a><a href="<?php echo $level.PAGES_AD;?>add_post.php?id='+ lstpost[i].id + '">';
          html+='<button class="btn btn btn-danger"><i class="far fa-edit"></i></button></a><a href=""><form action="" method="post"><input type="hidden" name="getid" value="'+lstpost[i].id +'"><button class=" btn btn btn-success" name="delete" onclick="confirm()"><i class=" far fa-trash-alt"></i></button></form></a></span></td>';
            }
          // alert(html);
          document.getElementById('loadajax').innerHTML = html; 
          }
      else{
         document.getElementById('loadajax').innerHTML = "<p> Không tìm thấy kết quả !</p>";
      }
    }
  }
}
</script>