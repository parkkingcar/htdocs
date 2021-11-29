function menuEvt(){
    let menu = document.getElementById('small-menu');
    menu.onclick = small;
    window.onresize = bigger;
}

function bigger(){
    if(window.innerWidth > 700){
        document.getElementById("item2").style.display = "none";
    }
}

function small(){
    let menu = document.getElementById("item2")
    menu.style.display = "block";
}


window.onload = menuEvt;