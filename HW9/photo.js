var img_src = new Array ("./agra_fort.jpg", "./ajanta_ellora.jpeg", "./akshardham_temple.jpg", 
"./gateway_of_india.jpg", "./hawa_mahal.jpeg", "./mehrangarh_fort.jpg", "./mysore_palace.jpeg", 
"./qutub_minar.jpg", "./sun_temple.jpg", "./taj_mahal.jpeg", "./victoria_memorial.jpg");
var idx = 1;
var run = false

function startShow () {
    run = true
    console.log("Starting Show")
    changeImg()
 }

function changeImg() {
    if (run){
        pic = document.getElementById("pic")

        $("#pic").fadeOut("slow",function() {
            console.log("fading out")
            document.getElementById("pic").src = img_src[idx]
         })

        $("#pic").fadeIn("slow",function() {
            console.log("fading in")
         })

        console.log(idx)
        idx += 1
        if (idx == img_src.length){idx = 0}

        myTimeout = setTimeout(changeImg, 3000);
    }
}

function endShow() {
    if (run){
        run = false
        clearTimeout(myTimeout);
        console.log("Ending Show")
    }
}