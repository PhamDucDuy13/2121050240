var listVideo = [
    {
        id : 1,
        names: "Bleach",
        linkImage :"bleach.jpg",
        linkYTB :"https://www.youtube.com/embed/llcMqqtE8Y8?si=T-UiZWck2tI1MH-D"
    },
    {
        id : 2,
        names: "Zootopia",
        linkImage :"zootopia.jpg",
        linkYTB :"https://www.youtube.com/embed/LnSYihRoGA4?si=9epmlCrkX0PCsQMF"
    },
    {
        id : 3,
        names: "Minions",
        linkImage :"minions.jpg",
        linkYTB :"https://www.youtube.com/embed/D2gUrt5zyIk?si=wsJ_WQiem7UZjsbq"
    },
    {
        id : 4,
        names: "Sherck",
        linkImage :"shreck.jpg",
        linkYTB :"https://www.youtube.com/embed/OG0yeVHEmOw?si=E-A0ZRCcUj-m0zM9"
    }
];
function chooseVideo(id){
    for(let i=0 ; i<listVideo.length ; i++){
        if(listVideo[i].id == id){
            document.getElementsByClassName("name")[0].innerHTML =listVideo[i].names;
            document.getElementsByTagName("iframe")[0].src = listVideo[i].linkYTB;
        }
            
    }
}