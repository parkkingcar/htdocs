

function questionEvt(){
    let write = document.getElementById("writer");
    write.onclick = writer;

    //페이지 이동버튼
    let previous = document.getElementById("previous");
    previous.onclick = back;

    let next = document.getElementById("next");
    next.onclick = forward;

    //비동기 통신을 통해서 db 출력
    let row = document.getElementById("selectCnt");
    row.onchange = changeRow;

    let firstBtn = document.getElementById('firstPage');
    let secondBtn = document.getElementById('secondPage');
    let thirdBtn = document.getElementById('thirdPage');

    firstBtn.onclick = pageChange;
    secondBtn.onclick = pageChange;
    thirdBtn.onclick = pageChange;

    let deleter = document.getElementById('delete');
    deleter.onclick = deler;

    //메뉴바
    let menu = document.getElementById('small-menu');
    let intro = document.getElementById('intro')
    let product = document.getElementById('product');
    let logout = document.getElementById('logout');

    menu.onclick = small;
    intro.onclick = introItem;
    product.onclick = productItem;
    window.onresize = bigger;
}

function deler(){
    if(this.innerHTML =="삭제"){
        this.innerHTML = "확인";
        let check = document.getElementsByClassName("form-check-input");
        for(let i = 0; i < check.length; i++){
            check[i].style.display = "block";
        }

        let num = document.getElementsByClassName("del");
        for(let i = 0; i < num.length; i++){
            num[i].style.display = "none";
        }

    }
    else if(this.innerHTML =="확인"){
        let del = document.getElementById('delete');
        del.type = "submit";
        this.innerHTML = "삭제";
    }
}


function pageChange(){
    let del = document.getElementById('delete');
    if(del.innerHTML == "확인"){
        for(let i = 0; i < check.length; i++){
            check[i].style.display = "none";
        }

        let num = document.getElementsByClassName("del");
        for(let i = 0; i < num.length; i++){
            num[i].style.display = "block";
        }
        del.innerHTML = "삭제";
    }

    let db_row = document.getElementById('rowcnt').innerHTML;
    let rowcnt = document.getElementById('selectCnt').value;

    let first = (parseInt(this.innerHTML) - 1) * parseInt(rowcnt) + 1;
    if(first > db_row) return;

    const xhttp = new XMLHttpRequest();
    document.getElementById('pagecnt').innerHTML = this.innerHTML;
    rowcnt = parseInt(rowcnt);
    xhttp.open("GET", "printRow.php?q="+rowcnt+"&page="+this.innerHTML+"&dbrow="+db_row);
    xhttp.send();
    xhttp.onload = row;
}

function changeRow(){
    let del = document.getElementById('delete');
    if(del.innerHTML == "확인"){
        for(let i = 0; i < check.length; i++){
            check[i].style.display = "none";
        }

        let num = document.getElementsByClassName("del");
        for(let i = 0; i < num.length; i++){
            num[i].style.display = "block";
        }
        del.innerHTML = "삭제";
    }

    let rowcnt = document.getElementById('rowcnt').innerHTML;
    const xhttp = new XMLHttpRequest();
    let page = 1;
    xhttp.open("GET", "printRow.php?q="+this.value+"&page="+page+"&dbrow="+rowcnt);
    xhttp.send();
    xhttp.onload = row;
}

function row(){
    document.getElementById('content').innerHTML = this.responseText;
}

function forward(){
    let first = document.getElementById("firstPage");
    let second = document.getElementById('secondPage');
    let third = document.getElementById('thirdPage');

    let cnt = parseInt(document.getElementById('cnt').innerHTML);
    if(parseInt(first.innerHTML) < cnt){
        first.innerHTML = parseInt(first.innerHTML) + 3;
        if(parseInt(second.innerHTML) + 3 > cnt) second.style.display = "none";
        else second.innerHTML = parseInt(second.innerHTML) + 3;

        if(parseInt(third.innerHTML) + 3 > cnt) third.style.display = "none";
        else third.innerHTML = parseInt(third.innerHTML) + 3;
    }


}

function back(){
    let first = document.getElementById("firstPage").innerHTML;

    if(first > 1){
        document.getElementById('firstPage').style.display = "block";
        document.getElementById('secondPage').style.display = "block";
        document.getElementById('thirdPage').style.display = "block";

        document.getElementById('firstPage').innerHTML = parseInt(first) - 3;
        document.getElementById('secondPage').innerHTML = parseInt(first) - 2;
        document.getElementById('thirdPage').innerHTML = parseInt(first) - 1;
    }
}


function writer(){
    window.location.href = "inquery.php";
}

//menu function
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




window.onload = questionEvt;