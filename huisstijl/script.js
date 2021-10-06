let banner = document.getElementById("bannerDiv");

function blurIt(){
    banner.style.animationName = "blurIt";
    banner.style.animationDuration = "3s";
    banner.style.filter = "blur(0px)";
}
window.onload = function(){
    blurIt();
}