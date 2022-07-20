<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mar & Sol Salgados - Home</title>

    <!-- Importando o BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Importando a Fonte "Pacifico" -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-header.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style-footer.css">

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

</head>

<body>

    <!-- Importando a Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg color-header fixed-top p-2">
            <a class="navbar-brand" href="#">
                <img src="../IMG/logo.png" alt="" width="80" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end fs-4" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                    <a class="nav-link" href="#">Produtos</a>
                    <a class="nav-link" href="#">Sobre</a>
                </div>
            </div>
        </nav>
    </header>

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


    <!-- rodapé-->
    <footer>
        <div class="container-footer">
            <div class="row pt-3">
                <div class="col-sm-2">
                    <a class="navbar-brand logo-f" href="#">
                        <img src="../IMG/logo.png" alt="Logo" width="160" height="120">
                    </a>
                </div>
                <div class="col-sm-3 font-f">
                    <h5>Endereço</h5>
                    <p class="pt-3">R. Belo Horizonte, 1943 - Neva<br>Cascavel - PR, 85802-010</p>
                </div>
                <div class="col-sm-4 font-f">
                    <h5>Contato</h5>
                    <ul>
                        <li>
                            <p class="contact">Telefone: (45) 3037-7592</p>
                        </li>
                        <li>
                            <p class="contact">Whatsapp: (45) 99937-6829</p>
                        </li>
                        <li>
                            <p class="contact">E-mail: maresolsalgados@contato.com </p>
                        </li>
                    </ul>
                    
                    
                </div>
                <div class="col-sm-2 font-f">
                    <h5>Redes Sociais</h5>
                        <a href="https://www.instagram.com/maresolsalgados/"><svg xmlns="http://www.w3.org/2000/svg" class="social-networks" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=5500000000000&text=Olá%2C+gostaria+de+um+orçamento&app_absent=0"><svg xmlns="http://www.w3.org/2000/svg" class="social-networks" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/maresolsalgados/"><svg src="http://www.w3.org/2000/svg" class="social-networks" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
