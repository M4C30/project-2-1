let sc = document.getElementById("secretContainer");

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
        document.getElementById(id).style.backgroundImage = "url(../images/pic1.jpg)";
    }
    else if (id == "pic2"){
        document.getElementById(id).style.backgroundImage = "url(../images/pic2.jpg)";
    }
    else if (id == "pic3"){
        document.getElementById(id).style.backgroundImage = "url(../images/pic3.jpg)";
    }
    else if (id == "pic4"){
        document.getElementById(id).style.backgroundImage = 'url(../images/pic4.jpg)';
    }
    
}
