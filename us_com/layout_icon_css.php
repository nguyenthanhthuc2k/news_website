<style type="text/css">
@font-face {
    font-family: Flaticon;
    src: url(Flaticon.woff);
    src: url(<?php  echo $level.FONTS?>Flaticon.eot) format(" embedded-opentype"),
        url(<?php  echo $level.FONTS?>Flaticon.woff) format("woff"), url(<?php  echo $level.FONTS?>Flaticon.ttf) format("truetype"), url(<?php  echo $level.FONTS;?>Flaticon.svg) format("svg");
    font-weight: 400;
    font-style:
        normal;
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    @font-face {
        font-family: flaticon;
        src:
            url(<?php  echo $level.FONTS;?>Flaticon.svg#Flaticon) format("svg");
    }
}

[class^="flaticon-"]:before,
[class*=" flaticon-"]:before,
[class^="flaticon-"]:after,
[class*=" flaticon-"]:after {
    font-family: Flaticon;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.flaticon-charity:before {
    content: "\f100";
}

.flaticon-donation-1:before {
    content: "\f101";
}

.flaticon-donation:before {
    content: "\f102"
    ;
}
</style>