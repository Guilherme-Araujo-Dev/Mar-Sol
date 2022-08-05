// Isso é só uma solução Provisória

navHome = document.getElementById("home");
navProduct = document.getElementById("product");
navAbout = document.getElementById("about");
navMakeRequest = document.getElementById("makeRequest");

window.onload = function() {
    if(navHome.classList.contains("active")) {
        navHome.classList.remove("active");
    } else if(navProduct.classList.contains("active")) {
        navProduct.classList.remove("active");
    } else if(navAbout.classList.contains("active")) {
        navAbout.classList.remove("active");
    } else if(navMakeRequest.classList.contains("active")) {
        navMakeRequest.classList.remove("active");
    }

    if(document.title == "Mar & Sol Salgados - Início") {
        navHome.classList.add("active");
    } else if(document.title == "Mar & Sol Salgados - Produtos") {
        navProduct.classList.add("active");
    } else if(document.title == "Mar & Sol Salgados - Sobre") {
        navAbout.classList.add("active");
    } else if(document.title == "Mar & Sol Salgados - Fazer Pedido") {
        navMakeRequest.classList.add("active");
    }
}
