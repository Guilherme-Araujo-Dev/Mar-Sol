<?php
session_start();
if(!isset($_SESSION['usuario'])) echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";
?>

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
    <link rel="shortcut icon" href="../../../IMG/favicon.ico" type="image/x-icon" />
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../../CSS/style-adm.css">

    <!-- Importando o CSS-->
    <link rel="stylesheet" type="text/css" href="../../../CSS/style-profile.css">


    

    <title>Mar & Sol - Painel do Administrador</title>
</head>
<body>

    <div class="sidebar">
        <header>Perfil</header>
        <ul>
            <li>
                <a href="../panel/pedidos-andamentos.php"> Pedidos Encaminhados</a>
            </li>

            <li>
                <a href=""> Pedidos à Entregar</a>
            </li>

            <li>
                <a href=""> Pedidos Entregues</a>
            </li>

            <li>
                <a href=""> Pedidos Cancelados</a>
            </li>

            <!--
            <li class="voltar">
                <a href="../user/index.php"><i class="fa-solid fa-arrow-left"></i> Voltar ao Site</a>
            </li>
            -->

        </ul>
    </div>

    <center>
        <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="410" height="410" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
        
        <br><br>
    </center>

<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>