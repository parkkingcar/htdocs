

function questionEvt(){
    let write = document.getElementById("writer");
    write.onclick = writer;
    let row = document.getElementById("selectCnt");
    row.onchange = changeRow;
}

function changeRow(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = row;
    xhttp.open("GET", "PrintRow.php?q="+this.value);
}

function row(){
    alert("d");
}

function writer(){
    window.location.href = "inquery.php";
}

window.onload = questionEvt;