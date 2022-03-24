var img_src = new Array ("agra", "ajanta", "akshard", "gateway", "hawa", "mehran", "mysore", "qutub", "sun", "taj", "victoria");
var idx = 0;
var run = false

$(document).ready(function() {
    $("#Start").click(function() {
        run = true
        while(run){
            $(img_src[idx]).fadeOut(3000,function() {
                console.log("fading out")
            })
            idx += 1
            if (idx == img_src.length){ idx = 0}
            $(img_src[idx]).fadeIn(3000,function() {
                console.log("fading out")
            })
        }
    })

    $("#End").click(function() {
        run = false
    })
 })