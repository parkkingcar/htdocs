function menuEvt(){
    let menu = document.getElementById('small-menu');
    let intro = document.getElementById('intro')
    let product = document.getElementById('product');
    let logout = document.getElementById('logout');

    menu.onclick = small;
    intro.onclick = introItem;
    product.onclick = productItem;
    window.onresize = bigger;

    //historyCorrect 시작

    let del = document.getElementById('deleteHistory');
    del.onclick = deleteHistory;

    let add = document.getElementById('addHistory');
    add.onclick = addHistory;

}

function deleteHistory(){
    if(this.innerHTML == "삭제"){
        this.innerHTML = "삭제 확인"

        const xml = new XMLHttpRequest();
        xml.open("GET", "historyrow.php?mode=" + 1, true);
        xml.send();
        xml.onload = function(){
            let right = document.getElementById('controlDel');
            right.innerHTML = this.responseText;
        }

    }
    else if(this.innerHTML == "삭제 확인"){
        this.innerHTML = "삭제";

        let parm ="";
        let chk = document.getElementsByClassName('checkdel');
        for(let i = 0; i < chk.length; i++){
            if(chk[i].checked){
                parm += "&del=" + chk[i].value;
            }
        }
        const xml = new XMLHttpRequest();
        xml.open("GET", "historyrow.php?mode=" + 2 + parm, true);
        xml.send();
        xml.onload = function(){
            let right = document.getElementById('controlDel');
            right.innerHTML = this.responseText;
        }
    }

}

function addHistory(){
    let len = document.getElementsByClassName('deletenum').length;

    if(len > 4) return;

    const xml = new XMLHttpRequest();
    xml.open("GET", "historyrow.php?mode=" + 3, true);
    xml.send();
    xml.onload = function(){
        let right = document.getElementById('controlDel');
        right.innerHTML = this.responseText + right.innerHTML;

    }
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