let banner = document.getElementById("bannerDiv");

function blurOut(){
    banner.style.animationName = "blurOut";
    banner.style.animationDuration = "1s";
    if (banner.style.animationName = "blurOut"){
        banner.style.filter = "blur(0px)"
    }
}

window.onload = function(){
    blurOut();
}