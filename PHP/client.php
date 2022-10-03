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
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS dos botoes-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-button.css">
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-adm.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    conectar(); 
    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <div class="sidebar">
        <header>Nome do ADM</header>
        <ul>
            <li>
                <a href="adm-product.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
            </li>

            <li>
                <a href="product2.php"><i class="fa-solid fa-qrcode"></i> Produto</a>
            </li>

            <div class="home">
            <li>
                <a href="#"><i class="fa-solid fa-link"></i> Clientes</a>
            </li>
            </div>

            <li>
                <a href="employees.php"><i class="fa-solid fa-bars-staggered"></i> Empregados</a>
            </li>
            
            <li class="voltar">
                <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
            </li>

        </ul>
    </div>


<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>