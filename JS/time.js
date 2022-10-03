// Função que cria uma mascara para o campo hi
window.onload = function() {
    let hi = document.getElementById("welcome");
    let hora = new Date;
    let horario = null;

    hora = hora.getHours();

    if ((hora > 5) && (hora < 12)) horario = "Bom dia!";
    else if ((hora > 11) && (hora < 18)) horario = "Boa tarde!";
    else horario = "Boa noite!";

    hi.innerHTML = horario;
}