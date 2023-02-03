<!-- Importando a Conexão com o Banco de Dados -->
<?php
include_once "../class/connection.php";
$pdo = conectar();
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando o BootStrap -->
    <!--Bootstrap do formulário-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />

    <!-- Importando o css -->
    <link rel="stylesheet" type="text/css" href="../css/style-cadastro.css">

    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- 
        o script abaixo faz a magica de pegar os dados no primeiro select e
        chamar a rotina listaCidades.php passando o estado escolhido e gerando
        o processo de preenchimento do 2 select de forma dinamica. 
    -->
    <title>Mar & Sol Salgados - Pagamento </title>
</head>


<body>

    <?php include("../class/header.php"); ?>
    <br><br><br><br>


    <div class="corpo horizontal-center">
        <div class="container ">
            <div class="forms-header">
                <u>
                    <h1>PAGAMENTO!</h1>
                </u>
            </div>
            
        </div>
    </div> 



</body>

</html>