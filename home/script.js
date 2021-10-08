let mainImage = document.getElementById("imageSlide");

function shadow(id){
 let newID = document.getElementById(id);
 mainImage.style.backgroundImage = "url('../images/homeImages/" + newID.id + ".jpg')";
 newID.style.filter = "opacity(30%)";
}
