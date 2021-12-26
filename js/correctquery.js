function menuEvt(){
    let menu = document.getElementById('small-menu');
    let intro = document.getElementById('intro')
    let product = document.getElementById('product');
    let logout = document.getElementById('logout');

    menu.onclick = small;
    intro.onclick = introItem;
    product.onclick = productItem;
    window.onresize = bigger;

    let correct = document.getElementById('correct');
    correct.onclick = activeCorrect;
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

function activeCorrect(){
   if(this.innerHTML == "수정"){
       this.style.display = "none";
       let control = document.getElementsByClassName('form-control');
       for(let i = 0; i < control.length; i++){
           if(control[i].name == "email" || control[i].name == "password") continue;
           control[i].disabled = false;
       }
       document.getElementById("fileContent").style.display = "none";
       document.getElementById('fileUpload').style.display = "block";
       let form = document.getElementById("submitbtn");
       form.type = "submit";
       form.innerHTML = "확인";

   }
}



window.onload = menuEvt;