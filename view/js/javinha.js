function usuarioCadastrado() {
    var usu = document.getElementById("usuario");
    var tentativas = 3;

    while(--tentativas <= 0) {
        if(usu == "")
        if(tentativas == 0) {
            alert("Logado");
        }
        else {
            usu = prompt("Login:")
        }
    }
}
