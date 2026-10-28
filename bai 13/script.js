let links =document.querySelectorAll(".link");

links.forEach(function(link) {
    link.addEventListener("mouseenter", function(){
        link.style.backgroundColor = "gray";
        link.style.color = "red";
    });

    link.addEventListener("mouseleave", function(){
        link.style.backgroundColor ="black";
        link.style.color ="white";
    });
});


var banner = document.querySelector(".banner");
var img = document.querySelector(".banner-img");
var video = document.querySelector("#video");

document.querySelector("#video-overlay").style.display = "none";
video.style.display = "none";
video.style.pointerEvents = "none";

banner.addEventListener("click", function() {
    if (img.style.display != "none") {
        video.style.width = img.offsetWidth + "px";
        video.style.height = img.offsetHeight + "px";
        img.style.display = "none";
        video.style.display = "block";
        video.src = "https://www.youtube.com/embed/3BeYkAKzz4g?autoplay=1&mute=1";
    } else {
        img.style.display = "block";
        video.style.display = "none";
        video.src = "";
    }
});

var posters = document.querySelectorAll(".poster");
var bannerImg = document.querySelector(".banner-img");

 
posters.forEach(function(poster) {
    poster.addEventListener("click",function(){
       

        bannerImg.src = poster.src;

        bannerImg.style.display ="block";
        video.style.display = "none";
        video.src =""
    });
});