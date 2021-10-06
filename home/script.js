let sc = document.getElementById("secretContainer");
let si = document.getElementById("secretImg");

sc.addEventListener("click", closeWin)

function closeWin(){
    sc.style.display = "none";
}
function resize(id){
    document.getElementById(id).style.backgroundSize = "110%";
    document.getElementById(id).style.transition = "0.2s"
    
}

function reresize(id){
    document.getElementById(id).style.backgroundSize = "100%";
}

function bigImage(id){
    console.log(id);
    sc.style.display = "flex";
    if (id == "pic1"){
        si.src = "../images/pic1.jpg";
    }
    else if (id == "pic2"){
        si.src = "../images/pic2.jpg";
    }
    else if (id == "pic3"){
        si.src = "../images/pic3.jpg";
    }
    else if (id == "pic4"){
        si.src = "../images/pic4.jpg";
    }
    
}

let banner = document.getElementById("bannerDiv");
let headerImage = document.getElementById("logo");

function blurIt(){
    banner.style.animationName = "blurIt";
    banner.style.animationDuration = "3s";
    banner.style.filter = "blur(0px)";
}

function getBig(){
    headerImage.style.animationName = "bigga"
}

window.onload = function(){
    blurIt();
}