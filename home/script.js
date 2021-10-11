
var leftButt = document.getElementById("left");
var rightButt = document.getElementById("right");

var bgImage = document.getElementById("mainLeft");

leftButt.addEventListener("click", function(){
    button("left");
});
rightButt.addEventListener("click", function(){
    button("right")
});

var counter = 0;

function button(slide){
    var cycle = ["url(../images/homeImages/pic1.jpg)", "url(../images/homeImages/pic2.jpg)", "url(../images/homeImages/pic3.jpg)", "url(../images/homeImages/pic4.jpg)"];
    if (slide = "right"){
        bgImage.style.backgroundImage = cycle[0];
        counter++;
    }

}