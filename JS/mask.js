// Função que cria uma mascara para o campo CNPJ
function CNPJmask(cnpj) {

    var i = cnpj.value;

    if (isNaN(i[i.length - 1])) { // impede entrar outro caractere que não seja número
        cnpj.value = i.substring(0, i.length - 1);
        return;
    }

    cnpj.setAttribute("maxlength", "18"); // atribui o tamanho máximo do campo de 18 caracteres
    if (i.length == 2 || i.length == 6) cnpj.value += "."; // coloca ponto depois dos 2° e 6° caracter
    else if (i.length == 10) cnpj.value += "/"; // coloca traço depois do 10° caracter
    else if (i.length == 15) cnpj.value += "-"; // coloca traço depois do 12° caracter

}

// Função que cria uma mascara para o campo Fone
function foneMask(fone) {

    var i = fone.value;

    if (isNaN(i[i.length - 1])) { // impede entrar outro caractere que não seja número
        fone.value = i.substring(0, i.length - 1);
        return;
    }

    if (i.length == 1) fone.value = "(" + i; // coloca parênteses no 1° caracter
    else if (i.length == 3) fone.value += ") "; // coloca traço depois do 3° caracter

    else if (i[5] == 9) {  // se o 6° caracter for 9

        fone.setAttribute("maxlength", "16"); // atribui o tamanho máximo do campo de 16 caracteres
        if (i.length == 6) fone.value += " "; // coloca espaço depois do 6° caracter
        else if (i.length == 11) fone.value += "-"; // coloca traço depois do 11° caracter

    } else { // se o 6° caracter não for 9

        fone.setAttribute("maxlength", "14"); // atribui o tamanho máximo do campo de 14 caracteres
        if (i.length == 9) fone.value += "-"; // coloca traço depois do 9° caracter

    }
}

function estadoMask(estado) {

    var i = estado.value;
    console.log("estado: " + estado);
    console.log("i: " + i);

    estado.setAttribute("maxlength", "2"); // atribui o tamanho máximo do campo de 2 caracteres

    if (!(isNaN(i[i.length - 1]))) { // impede entrar um caractere que seja um número
        estado.value = i.substring(0, i.length - 1);
        return;
    }

    if (i.length == 1) estado.value = i.toUpperCase(); // coloca o primeiro caracter em maiúsculo
    else if (i.length == 2) estado.value = i.toUpperCase(); // coloca o segundo caracter em maiúsculo

}