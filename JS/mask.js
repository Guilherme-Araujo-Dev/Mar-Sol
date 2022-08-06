// Função que cria uma mascara para o campo CNPJ
function CNPJmask(cnpj) {

    var i = cnpj.value;
    console.log(i);

    if (isNaN(i[i.length - 1])) { // impede entrar outro caractere que não seja número
        cnpj.value = i.substring(0, i.length - 1);
        return;
    }

    cnpj.setAttribute("maxlength", "18"); // atribui o tamanho máximo do campo de 18 caracteres
    if (i.length == 2 || i.length == 6) cnpj.value += "."; // coloca ponto depois dos 2° e 6° caracter
    if (i.length == 10) cnpj.value += "/"; // coloca traço depois do 10° caracter
    if (i.length == 15) cnpj.value += "-"; // coloca traço depois do 12° caracter

}