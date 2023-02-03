<?php
include_once('../class/redirect.php');

session_start();
if(!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') redirecionar("../home/index.php");
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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    
    <!-- Importando o css do sidebar-->
    <link rel="stylesheet" type="text/css" href="../css/style-adm-home.css">

    <!-- Importando o css do header-->
    <link rel="stylesheet" type="text/css" href="../css/style-header.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("../class/connection.php");
    conectar(); 
    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>


<?php include("../class/adm-sidebar.php"); ?>
<br><br><br>



<div class="botao">
    <button onclick="window.location.href = '../home/panel/profile.php'">Perfil do usuário</button> 
</div>


    <div class="imagem">
        <img src="../img/aii.jpg">
    </div>


    <!--Texto de bom dia, boa tarde, boa noite👇👇-->
<div class="diaa">
    <h1 id="welcome">Bom dia</h1>
    <!--Importando o Js-->
    <script src="../js/time.js"></script>
</div>


<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>