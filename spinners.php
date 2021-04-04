<div class="bg-loader d-none" id="spinners">
    <div class="loader">Loading...</div>
</div>
<style>
.bg-loader {
    position: fixed;
    z-index: 2000;
    background: rgba(0, 0, 0, .2);
    height: 100%;
    width: 100vw;
}

.loader,
.loader:before,
.loader:after {
    background: #ffffff;
    -webkit-animation: load1 1s infinite ease-in-out;
    animation: load1 1s infinite ease-in-out;
    width: 1em;
    height: 4em;
    z-index: 1055;
}

.loader {
    color: #ffffff;
    text-indent: -9999em;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: relative;
    font-size: 11px;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
}

.loader:before,
.loader:after {
    position: absolute;
    top: 0;
    content: '';
}

.loader:before {
    left: -1.5em;
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
}

.loader:after {
    left: 1.5em;
}

@-webkit-keyframes load1 {

    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 4em;
    }

    40% {
        box-shadow: 0 -2em;
        height: 5em;
    }
}

@keyframes load1 {

    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 4em;
    }

    40% {
        box-shadow: 0 -2em;
        height: 5em;
    }
}
</style>
<script>
function show_spinners() {
    document.getElementById('spinners').classList.remove('d-none');
    document.getElementById('spinners').classList.add('d-block');
}

function hide_spinners() {
    document.getElementById('spinners').classList.remove('d-block');
    document.getElementById('spinners').classList.add('d-none');
}
</script>