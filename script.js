function validaemail1() {
    if(document.getElementsByName("email")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("email")[0].focus();
        return false;
    }
}