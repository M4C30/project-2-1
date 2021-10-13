let select = document.getElementById("selectOp");

let allManga = document.getElementsByClassName("manga");
let allComics = document.getElementsByClassName("comics");
let all = document.getElementsByClassName("sects");

let info = select.options[select.selectedIndex];

select.addEventListener("click", take);

function take() {
    if (select.value == "manga") {
        for (var i = 0; i < allComics.length; i++) {
            allComics[i].style.display = "none";
        }
        for (var i = 0; i < allManga.length; i++) {
            allManga[i].style.display = "block";
        }
    }
    if (select.value == "comics") {
        for (var i = 0; i < allManga.length; i++) {
            allManga[i].style.display = "none";
        }
        for (var i = 0; i < allComics.length; i++) {
            allComics[i].style.display = "block";
        }
    }
    if (select.value == "nope") {
        for (var i = 0; i < allComics.length; i++) {
            allComics[i].style.display = "block";
        }
        for (var i = 0; i < allManga.length; i++) {
            allManga[i].style.display = "block";
        }
    }
    console.log(select.value)


}


// Pop Up
let imgSlot = document.getElementById("imgSlot");
let imgTitle = document.getElementById("imgTitle");
let infoDiv = document.getElementById("information");


function popUp(n) {

document.getElementById("all").style.pointerEvents = "none";

infoDiv.style.display = "grid";



    let imgSrc = document.getElementById(n).src;
    let timgInfo = imgSrc.split("/images/comics/").pop();
    let ttimgInfo = timgInfo.replace(".jpeg", "");
    let tttimgInfo = ttimgInfo.replace(".jpg", "");
    let imgInfo = tttimgInfo.replaceAll("%20", " ");


    
    console.log(imgInfo);

    imgSlot.src = imgSrc;
    imgTitle.innerHTML = imgInfo;
}

function sluit(){
    infoDiv.style.display = "none";
    document.getElementById("all").style.pointerEvents = "visible";
}









