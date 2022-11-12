<?php
session_start();
if (!isset($_SESSION['usuario'])) $_SESSION['usuario'] = null;

?>

<link rel="stylesheet" type="text/css" href="../../CSS/style-header.css">

<header>
    <nav class="navbar navbar-expand-lg color-header p-2">
        <a class="navbar-brand" href="index.php">
            <img src="" alt="" width="80" height="60">
        </a>
    </nav>
    <nav class="navbar navbar-expand-lg color-header fixed-top p-2">
        <a class="navbar-brand" href="index.php">
            <img src="../../IMG/logo.png" alt="" width="80" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end fs-4" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link navPage" aria-current="page" href="../Home/index.php" id="home">Início</a>
                <a class="nav-link navPage" href="../Home/product.php" id="product">Produtos</a>
                <a class="nav-link navPage" href="../Home/about.php" id="about">Sobre</a>
                <!--<a class="nav-link navPage" href="fazer pedido.php" id="makeRequest">Fazer Pedido</a>-->

                <a class="nav-link navPage active" href="<?php if ($_SESSION['usuario'] == null) echo "../Home/login.php";
                                                            else {
                                                                if ($_SESSION['acesso'] == "Admin") echo "../Admin/index.php";
                                                                else if ($_SESSION['acesso'] == "User") echo "Panel/profile.php";
                                                                else echo "../Home/index.php";
                                                            } ?>" id="makeRequest"><?php if ($_SESSION['usuario'] == null) echo "Login";
                                                                                else echo $_SESSION['usuario'] ?></a>

                <div class="perfil_carrinho">
                    <a href="carrinho.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </nav>
</header>