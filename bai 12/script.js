var mode = true
function modeButton () {
   if (mode == true) {
     document.getElementsByTagName("body")[0].style ="background-color : black" ;
    document.getElementsByTagName("h1")[0].style ="color : white" ;
    document.getElementById("modeButton").innerHTML = "che do sang";
    document.getElementsByTagName("img")[0].src="moon.png";
    mode = false;
   }else{
    document.getElementsByTagName("body")[0].style ="background-color : white" ;
    document.getElementsByTagName("h1")[0].style ="color : white" ;
    document.getElementById("modeButton").innerHTML = "che do toi";
    document.getElementsByTagName("img")[0].src="sun.png";
    mode = true;
   }
}