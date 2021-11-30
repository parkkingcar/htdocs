function menuEvt(){
    let menu = document.getElementById('small-menu');
    let intro = document.getElementById('intro')
    let product = document.getElementById('product');
    menu.onclick = small;
    intro.onclick = introItem;
    product.onclick = productItem;
    window.onresize = bigger;
}

function bigger(){
    if(window.innerWidth > 700){
        document.getElementById("item2").style.display = "none";
    }
}

function small(){
    let menu = document.getElementById("item2")
    if(menu.style.display === "block") menu.style.display = "none";
    else menu.style.display = "block";
}

function introItem(){
    let item = document.getElementById("intro-drop");
    if(item.style.display === "block") item.style.display = "none";
    else item.style.display = "block";
}

function productItem(){
    let item = document.getElementById("product-drop");
    if(item.style.display === "block") item.style.display = "none";
    else item.style.display = "block";

}


window.onload = menuEvt;