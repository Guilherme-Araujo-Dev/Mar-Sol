<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mar & Sol Salgados - Início</title>

    <!-- Importando o BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Importando a Fonte "Pacifico" -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    conectar(); 
    ?>

</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("class/header-file.php"); ?>

    <main>
        <!-- Importando o Carrossel -->
        <div id="carouselExampleWhite" class="carousel carousel-white slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleWhite" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleWhite" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleWhite" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active limit-carousel" data-bs-interval="5000">
                    <img src="../IMG/banner-home1.jpg" class="d-block w-100" alt="Salgados">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-carousel">Salgados Deliciosos</h1>
                        <p class="fs-5">Mar & Sol Salgados - O Momento do Sabor.</p>
                    </div>
                </div>
                <div class="carousel-item limit-carousel" data-bs-interval="5000">
                    <img src="../IMG/banner-home2.jpg" class="d-block w-100" alt="Serviço">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-carousel">Qualidade e Higiene</h1>
                        <p class="fs-5">Sempre prezando pela qualidade e a higiene dos nossos produtos.</p>
                    </div>
                </div>
                <div class="carousel-item limit-carousel" data-bs-interval="5000">
                    <img src="../IMG/banner-home3.jpg" class="d-block w-100" alt="Transporte">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-carousel">Transporte e Segurança</h1>
                        <p class="fs-5">Transporte para toda a Região Oeste do Paraná</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleWhite"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleWhite"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    <!-- Importando o Mapa -->
    <div class="mapa">
        <h2 class="mb-5"> Nosso Estabelecimento</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14468.371613159574!2d-53.474013!3d-24.9629536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb28698b3771103c9!2sMar%20%26%20Sol%20Salgados!5e0!3m2!1spt-BR!2sbr!4v1658326718074!5m2!1spt-BR!2sbr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- Importando o rodapé-->
    <?php include("class/footer-file.php"); ?>

</body>

</html>