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

    <!-- Importando o CSS dos botoes-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-button.css">
    
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

  <!-- Importando o Cabeçalho -->
  <?php include("../class/header.php"); ?>

    <div class="sidebar">
        <header>Nome do ADM</header>
        <ul>
            <li>
                <a href="../adm/admHOME.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
            </li>

            <div class="home">
            <li>
                <a href="#"><i class="fa-solid fa-cookie-bite"></i> Produto</a>
            </li>
            </div>

            <li>
                <a href="../adm/admCLIENT.php"><i class="fa-solid fa-user"></i> Clientes</a>
            </li>

            <li>
                <a href="../adm/admEMPREGADOS.php"><i class="fa-solid fa-user-tie"></i> Empregados</a>
            </li>
            
            <li class="voltar">
                <a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar para o Site</a>
            </li>

        </ul>
    </div>

    <div class="botoess">
        <a href="../product3.php"><input type="Button" style="width:300px;height:60px; background-color:#daa84d" value="Criar Produto"><br><br></a>
        <a href="../report-product.php"><input type="Button" style="width:300px;height:60px; background-color:#daa84d" value="Relatório de Produtos"><br><br></a>
        <a href="../edit-product.php"><input type="Button" style="width:300px;height:60px; background-color:#daa84d" value="Editar Produto"><br><br></a>
        <a href="../delet-product.php"><input type="Button" style="width:300px;height:60px; background-color:#daa84d" value="Deletar Produto"></a>
    </div>


<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>