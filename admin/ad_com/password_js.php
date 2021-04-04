<script>
// preview ảnh
var preview_img = function(event) {
    var img = document.getElementById('avatar_img');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.onload = function() {
        URL.revokeObjectURL(img.src)
    }
};
// chuyển tab
var menus = document.getElementById('tab-menu');
var btns = menus.getElementsByClassName('nav-link');
// chuyển tab menu
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        var btnactive = menus.getElementsByClassName("active");
        btnactive[0].className = btnactive[0].className.replace(" active", "");
        this.className += " active";
    });
    // chuyển tab info
    var btninfo = document.getElementById('card-info');
    var btnpass = document.getElementById('card-pass');
    document.getElementById('info').addEventListener('click', function() {
        btninfo.style.display = 'block';
        btnpass.style.display = 'none';
    })
    document.getElementById('pass').addEventListener('click', function() {
        btninfo.style.display = 'none';
        btnpass.style.display = 'block';
    })

}
</script>