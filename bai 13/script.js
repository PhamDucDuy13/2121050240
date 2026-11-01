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


var banner = document.getElementsByClassName("banner")[0];
var img = document.getElementsByClassName("banner-img")[0];
var video = document.getElementById("video");
var overlay = document.getElementById("video-overlay");
document.getElementById("video-overlay").style.display = "none";
video.style.display = "none";
video.style.pointerEvents = "none";
overlay.style.display = "none";

banner.onclick= function() {
    if (img.style.display != "none") {
        video.style.width = img.offsetWidth + "px";
        video.style.height = img.offsetHeight + "px";
        img.style.display = "none";
        video.style.display = "block";
        overlay.style.display = "block";
        video.src = "https://www.youtube.com/embed/3BeYkAKzz4g?autoplay=1&mute=1";
    } else {
        img.style.display = "block";
        video.style.display = "none";
        overlay.style.display = "none";
        video.src = "";
    }
};

var listVideo =[
    {
        id:1,
        names:"Bleach",
        linkImage:"bleach.jpg",
        linkYTB:"https://www.youtube.com/embed/llcMqqtE8Y8?si=T-UiZWck2tI1MH-D"
    },
    {
        id:2,
        names:"Shreck",
        linkImage:"shreck.jpg",
        linkYTB:"https://www.youtube.com/embed/OG0yeVHEmOw?si=E-A0ZRCcUj-m0zM9"
    },
    {
        id:3,
        names:"Minions",
        linkImage:"minions.jpg",
        linkYTB:"https://www.youtube.com/embed/D2gUrt5zyIk?si=wsJ_WQiem7UZjsbq"
    },
    {
        id:4,
        names:"Zootopia",
        linkImage:"zootopia.jpg",
        linkYTB:"https://www.youtube.com/embed/LnSYihRoGA4?si=9epmlCrkX0PCsQMF"
    },
    {
        id:5,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
     {
        id:6,
        names:"Bay Hoi Sinh",
        linkImage:"1.jpg",
        linkYTB:"https://www.youtube.com/embed/mPkWk1OMP5E?si=Q8Sa4PT2ybgX_Gjt" 
    },
    {
        id:7,
        names:"Smile",
        linkImage:"2.jpg",
        linkYTB:"https://www.youtube.com/embed/BcDK7lkzzsU?si=5y0pyR6FOTtVQyTY" 
    },
    {
        id:8,
        names:"Tru Quy",
        linkImage:"3.jpg",
        linkYTB:"https://www.youtube.com/embed/kMevbCSgi1M?si=x3bOT7x91R0G_u2T"
    },
    {
        id:9,
        names:"Ga tu than",
        linkImage:"4.jpg",
        linkYTB:"https://www.youtube.com/embed/ui79hPWAyHU?si=BvS2StWXluShe11x"
    },
     {
        id:10,
        names:"Giao Uoc Quy",
        linkImage:"5.jpg",
        linkYTB:"https://www.youtube.com/embed/s7rv94GP9ec?si=eWQywrQwardub008"
    },
    
     {
        id:11,
        names:"Lam giau vs ma",
        linkImage:"6.jpg",
        linkYTB:"https://www.youtube.com/embed/MtZ_hf7tLxk?si=I-jjNd9e61KWjq5X" 
    },
    
     {
        id:12,
        names:"Gap lai chi bau",
        linkImage:"7.jpg.",
        linkYTB:"https://www.youtube.com/embed/Gggw9jwr1h4?si=T05k0TpAuzBPUodP"
    },
    
     {
        id:13,
        names:"Bo tu Bao thu",
        linkImage:"8.jpg",
        linkYTB:"https://www.youtube.com/embed/tPZCzRfSe4A?si=bA2HSimU3dpDgk4T"
    },
    
    {
        id:14,
        names:"Dieu Uoc Cuoi Cung",
        linkImage:"9.jpg",
        linkYTB:"https://www.youtube.com/embed/qPih-Q4CZZ0?si=LWNWu7fatfkbAQA9"
    },
    
    {
        id:15,
        names:"Bo Gia",
        linkImage:"10.jpg",
        linkYTB:"https://www.youtube.com/embed/jluSu8Rw6YE?si=l6XamTqGK4XPhlA3" 
    },
    
    {
        id:16,
        names:"Nguoi nhen",
        linkImage:"11.jpg",
        linkYTB:"https://www.youtube.com/embed/RKev8MVJViU?si=g_s6tAuOh_NUPxg8"  
    },
    
    {
        id:17,
        names:"Hulk",
        linkImage:"12.jpg",
        linkYTB:"https://www.youtube.com/embed/xbqNb2PFKKA?si=PkwUXp_Dj637It7-"
    },
    
    {
        id:18,
        names:"Captain America",
        linkImage:"13.jpg",
        linkYTB:"https://www.youtube.com/embed/7SlILk2WMTI?si=EgmSWLx1yPk2FOFB" 
    },
    
    {
        id:19,
        names:"Batman",
        linkImage:"14.jpg",
        linkYTB:"https://www.youtube.com/embed/mqqft2x_Aa4?si=IJsZgg9B3EiKZFMm"
    },
    
    {
        id:20,
        names:"Aquaman",
        linkImage:"15.jpg",
        linkYTB:"https://www.youtube.com/embed/WDkg3h8PCVU?si=tsCwD5QCh3JbWdPz"  
    },
    
    {
        id:21,
        names:"Karate Kid",
        linkImage:"16.jpg",
        linkYTB:"https://www.youtube.com/embed/XY8amUImEu0?si=FshtSZ7TXc7SWPMG" 
    },
    
    {
        id:22,
        names:"Thuy Hu",
        linkImage:"17.jpg",
        linkYTB:"https://www.youtube.com/embed/Ivq2JFcQYYM?si=-5ZnRVQD8cxr1qxz" 
    },
    
    {
        id:23,
        names:"Ly tu Long",
        linkImage:"18.jpg",
        linkYTB:"https://www.youtube.com/embed/MJL9TDF0Z1w?si=90hwLn5hT2hzGxPJ"
    },
    
    {
        id:24,
        names:"Than Bai",
        linkImage:"19.jpg",
        linkYTB:"https://www.youtube.com/embed/lmwwwjJ1YQg?si=l8Pq-SEHQSP__PDv" 
    },
    
    {
        id:25,
        names:"Tan O long Vien",
        linkImage:"20.jpg",
        linkYTB:"https://www.youtube.com/embed/7LdmzC1VmiQ?si=irm8RKmTLC-IdvdL" 
    },
    
    {
        id:26,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    {
        id:27,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    {
        id:29,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    {
        id:28,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    {
        id:29,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    {
        id:30,
        names:"Ki Bang Ha",
        linkImage:"kibangha.jpg",
        linkYTB:"https://www.youtube.com/embed/2zjdCvrr4Fw?si=ZQ1WXSK69iXr4miM" 
    },
    
    
    
    
    
    
];
function chooseVideo(id) {
    for (let i =0;i<listVideo.length;i++) {
        if(listVideo[i].id == id){
            document.getElementsByClassName("name")[0].innerHTML =listVideo[i].names;
            document.getElementsByTagName("iframe")[0].src= listVideo[i].linkYTB;
            document.getElementsByClassName("banner-img")[0].style.display = "none";

            document.getElementById("video").style.display = "block";
        }
    }
}