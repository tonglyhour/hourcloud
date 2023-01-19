var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
        counter = 1;
    }
}, 5000);


window.onload = displayShowNow();
document.getElementById("show1").addEventListener("click", displayShowNow);
document.getElementById("show2").addEventListener("click", displayShowSoon);
document.getElementById("show3").addEventListener("click", displayShow4dx);
document.getElementById("show4").addEventListener("click", displayShowKid);

function displayShowNow(){
    document.getElementById("show1").classList.add("tab-active");
    document.getElementById("show2").classList.remove("tab-active");
    document.getElementById("show3").classList.remove("tab-active");
    document.getElementById("show4").classList.remove("tab-active");

    var showCards = document.getElementsByClassName("movie-item");
    for (let i = 0; i < showCards.length; i++){
        if(showCards[i].classList.contains("show-now")){
            showCards[i].style.display="block";
        }
        else{
            showCards[i].style.display="none";
        }
    }
}

function displayShowSoon(){
    document.getElementById("show1").classList.remove("tab-active");
    document.getElementById("show2").classList.add("tab-active");
    document.getElementById("show3").classList.remove("tab-active");
    document.getElementById("show4").classList.remove("tab-active");

    var showCards = document.getElementsByClassName("movie-item");
    for (let i = 0; i < showCards.length; i++){
        if(showCards[i].classList.contains("show-soon")){
            showCards[i].style.display="block";
        }
        else{
            showCards[i].style.display="none";
        }
    }
}

function displayShow4dx(){
    document.getElementById("show1").classList.remove("tab-active");
    document.getElementById("show2").classList.remove("tab-active");
    document.getElementById("show3").classList.add("tab-active");
    document.getElementById("show4").classList.remove("tab-active");

    var showCards = document.getElementsByClassName("movie-item");
    for (let i = 0; i < showCards.length; i++){
        if(showCards[i].classList.contains("show-4dx")){
            showCards[i].style.display="block";
        }
        else{
            showCards[i].style.display="none";
        }
    }
}
function displayShowKid(){
    document.getElementById("show1").classList.remove("tab-active");
    document.getElementById("show2").classList.remove("tab-active");
    document.getElementById("show3").classList.remove("tab-active");
    document.getElementById("show4").classList.add("tab-active");

    var showCards = document.getElementsByClassName("movie-item");
    for (let i = 0; i < showCards.length; i++){
        if(showCards[i].classList.contains("show-kid")){
            showCards[i].style.display="block";
        }
        else{
            showCards[i].style.display="none";
        }
    }
}