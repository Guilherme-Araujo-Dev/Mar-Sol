<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando o BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-adm.css">

    <!-- Importando o CSS do header-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-header.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("../class/connection.php");
    conectar(); 
    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>


    <div class="sidebar">

        <div class="imgSIDEBAR">
            <img src="../../IMG/logo.png" alt="" width="150px" height="130px">
        </div>

        <header>Nome do ADM</header>
        <ul>
            <div class="home">
                <li>
                    <a href="#"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
                </li>
            </div>

            <li>
                <a href="../Admin/adm-products.php"><i class="fa-solid fa-cookie-bite"></i> Produto</a>
            </li>

            <li>
                <a href="../Admin/adm-clients.php"><i class="fa-solid fa-user"></i> Clientes</a>
            </li>

            <li>
                <a href="../Admin/adm-employees.php"><i class="fa-solid fa-user-tie"></i> Empregados</a>
            </li>
        
            <li class="voltar">
                <a href="../Home/index.php"><i class="fa-solid fa-arrow-left"></i> Voltar ao Site</a>
            </li>

        </ul>
    </div>

    <p class="admm">Página do Adiministrador</p>

    <div class="imagem">
        <img src="../../IMG/aii.jpg">
    </div>

<!--Texto de bom dia, boa tarde, boa noite👇👇-->
<div class="diaa">
    <h1 id="welcome">Bom dia</h1>
    <!--Importando o Js-->
    <script src="../../jS/time.js"></script>
</div>


<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>