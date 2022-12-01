<?php
session_start();
if (!isset($_SESSION['usuario'])) echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";

include_once("../../Class/connection.php");
$pdo = conectar();

$sql = "SELECT idmovimento FROM movimentos WHERE aprovado = 'N' AND entregue = 'N' AND fk_idempresa = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $_SESSION['idUsuario']);
$stmt->execute();

$idMovimento = $stmt->fetchAll();
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
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-adm.css">

   <!-- Importando o CSS-->
   <link rel="stylesheet" href="../../CSS/style-pedidos-cancelados.css">

   <!--Importando o CSS do sidebar-->
   <link rel="stylesheet" type="text/css" href="../../CSS/style-panel-sidebar.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>


<?php include("../../Class/panel-header.php") ?>
<?php include("../../Class/panel-sidebar.php") ?>

<body>
<center><br>
        <div class="admREPORT">
        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
            <h1>Cancelados</h1>
        </div>
    </center>
    <br><br>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Produto</th>
                <th class="invisivel">invisivel</th>
                <th class="invisivel">invisivel</th>
                <th>Nome do Produto</th>
            </tr>

            <!--
            <tr>
                <td>
                    <div>
                        <img src="../../IMG/food/pfg.jpg" alt="imagem" width="100px" height="100px">
                    </div>
                </td>

                <td>
                    <div>
                        <p>
                            
                        </p>
                    </div>
                </td>

                <td>
                    <div>
                        <p>
                            
                        </p>
                    </div>
                </td>

                <td>
                    <div>
                        <p>
                            
                        </p>
                    </div>
                </td>

            </tr>
-->
            <!--
                1. O tr cria uma nova linha dentro da tabela
                2. Para colocar novos textos NA MESMA LINHA tem que usar o td dentro do tr
            -->
        </table>
    </div>

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>
</body>
</html>
