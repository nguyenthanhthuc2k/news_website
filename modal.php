<style>
.my-modal {
    display: none;
    z-index: 1055;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .5);
    width: 100%;
    height: 100%;
}

.my-modal .modal-main {
    width: 50%;
    background-color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    border-radius: 5px;
}
</style>
<div class="my-modal" id="my-modal-warning">
    <div class="modal-main">
        <div class="modal-header">
            <div class="modal-title text-danger">
                <h3>Cảnh báo !!!</h3>
            </div>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="close-modal">Đóng</button>
            <!-- <button type="button" class="btn btn-danger" id="ok">Đồng ý</button> -->
        </div>
    </div>
</div>
<script>
function show_modal(title, content) {
    document.getElementsByClassName('my-modal')[0].classList.add('d-block');
    document.getElementsByClassName('modal-title')[0].innerHTML = '<h3>' + title + '</h3>';
    document.getElementsByClassName('modal-body')[0].innerHTML = '<h6>' + content + '</h6>';
}

function hide_modal() {
    document.getElementsByClassName('my-modal')[0].classList.remove('d-block');
}
// đóng modal khi click btn đóng
document.getElementById('close-modal').addEventListener('click', () => {
    hide_modal();
})
</script>