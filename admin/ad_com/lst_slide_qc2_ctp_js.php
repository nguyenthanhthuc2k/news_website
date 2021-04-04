<script type="text/javascript">
//jquery
function $(selector) {
    return document.querySelector(selector);
}
// preview ảnh
var preview_img = function(event) {
    var img = document.getElementById('img');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.onload = function() {
        URL.revokeObjectURL(img.src)
    }
};
// xử lí khi click vào hình img-upload sẽ mở sk click mở lấy file
function upimg() {
    $('#image').click();
}
// xử lí khi nhập thông tin thêm slide mà k ấn luu sẻ reset from
function btn_them() {
    var img = document.getElementById('img');
    img.src = "<?php echo $level.IMG;?>img-upload.png";
    img.onload = function() {
        URL.revokeObjectURL(img.src)
    }
    $('#frm_add_slide').reset();
}
// $(document).ready(function() {
//     //sk lick vào 
//     $(document).on('click', '#btn-viewdetail', function(e) {
//         e.preventDefaults();
//         // lấy id slide
//         var id = $(this).data('getid');
//         alert(id);
//         $('#modal-content').hide();
//         $('#modal-loader').show();
//         $.ajax({
//                 url: '';
//                 type: 'POST';
//                 data: 'id=' + id,
//                 dataType: 'json',
//                 cache: false
//             })
//             .done(function(data)) {
//                 console.log(data.)
//             }
//     })
// });
//ajax thêm slide
// $('#btn-save').on('click', function() {
//     var name = $('#name').val();
//     var content = $('#content').val();
//     var img = $('#image').val();
//     if (name == '' || content == '' || img == '')
//         alert('Vui lòng nhập đầy đủ nội dung !')
//     else {
//         $.ajax({
//             url: '../ad_com/lst_slide_pro.php',
//             method: 'GET',
//             data: {
//                 name: name,
//                 content: content,
//                 image: img
//             },
//             success: function(data) {
//                 alert('Thêm thành công');
//                 $('#modal_them_slide').on('hindden.bs.modal')

//             }
//         })
//     }
// })
</script>