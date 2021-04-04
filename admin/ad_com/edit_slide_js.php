<script>
var preview_img = function(event) {
    var img = document.getElementById('img');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.onload = function() {
        URL.revokeObjectURL(img.src)
    }
};
</script>