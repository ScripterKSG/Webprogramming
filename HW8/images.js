var top_img = "cluster";
var img_src = new Array ("cluster", "m104", "ngc1300", "interactGalaxy", "m51", "ngc6217");
var cap = new Array ("Galaxy Cluster", "M 104", "NGC 1300",
 "Interacting Galaxies", "M 51", "NGC 6217");

function get_img () {
   var rnd_idx = Math.trunc (Math.random() * img_src.length);
   document.getElementById("caption").innerHTML = cap[rnd_idx];
   return img_src[rnd_idx];
}

function changeImg() {
   var new_img = get_img();
   styleTop = document.getElementById(top_img).style;
   styleNew = document.getElementById(new_img).style;

   styleTop.zIndex = "0";
   styleNew.zIndex = "10";
   top_img = new_img;
}
