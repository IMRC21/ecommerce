function controllo(){
    let usr = document.getElementById("usr");
    let psw = document.getElementById("psw");
    let pswC = document.getElementById("pswChk");
    let nome = document.getElementById("nome");
    let cognome = document.getElementById("cognome");
    let mail = document.getElementById("mail"); 

    let vuotoU, vuotoP, vuotoN, vuotoC, pswNoncombacia, vuotoM;

    if(mail.value === ""){
        document.getElementById("mailVuoto").setAttribute("class", "mostra");
        vuotoM = true;
    }

    if(usr.value === ""){
        document.getElementById("lv").setAttribute("class", "mostra");
        vuotoU = true;
    }

    if(psw.value === ""){
        document.getElementById("pswVuota").setAttribute("class", "mostra");

    }

    if(psw.value != pswC.value){
        document.getElementById("nonCombacia").setAttribute("class", "mostra");
        pswNoncombacia = true;
    }

    if(nome.value === ""){
        document.getElementById("nomeVuoto").setAttribute("class", "mostra");

        vuotoN = true;
    }

    if(cognome.value === ""){
        document.getElementById("cognomeVuoto").setAttribute("class", "mostra");
        vuotoC = true;
    }

    if(vuotoU || pswNoncombacia || vuotoN || vuotoC){
        return false;
    }else{
        return true;
    }
}

function controlloPsw(){
    let psw = document.getElementById("psw");
    let pswC = document.getElementById("pswChk");
    if(psw.value != pswC.value){
        document.getElementById("nonCombacia").setAttribute("class", "mostra");
        return false
    }else return true;
}
