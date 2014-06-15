var audio = document.getElementById("bark"); 
/*audio.play();
var audio = $("#bark")[0]; 
audio.play();*/
var audio = $("#bark")[0];
$("img").mouseenter(function() {
    audio.play();
    });