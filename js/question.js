function questionEvt(){
    let write = document.getElementById("writer");
    write.onclick = writer;
}

function writer(){
    window.location.href = "inquery.php";
}

window.onload = questionEvt;