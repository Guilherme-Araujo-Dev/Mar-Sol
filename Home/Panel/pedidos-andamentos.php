<?php
session_start();
if(!isset($_SESSION['usuario'])) echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";
?>

<?php include_once("../../Class/connection.php");
    conectar(); 
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

   <!-- Importando o CSS-->
   <link rel="stylesheet" href="../../CSS/style-pedidos-andamentos.css">

   <!--Importando o CSS do sidebar-->
   <link rel="stylesheet" type="text/css" href="../../CSS/style-panel-sidebar.css">

   
    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>
<?php include("../../Class/panel-header.php") ?>
<?php include("../../Class/panel-sidebar.php") ?>

<center><br>
        <div class="admREPORT">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
            <h1>Pendentes</h1>
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
                <th class="excluir">Cancelar</th>
            </tr>


                <td>
                    <div>
                        <img src="../../IMG/food/ppg.jpg" alt="imagem" width="100px" height="100px">
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
                            Coxinha de Carne Grande
                        </p>
                    </div>
                </td>

                <td>
                    <div>
                        <p>
                            <a href="">Remover</a>
                        </p>
                    </div>
                </td>

            </tr>
            <!--
                1. O tr cria uma nova linha dentro da tabela
                2. Para colocar novos textos NA MESMA LINHA tem que usar o td dentro do tr
            -->
        </table>
    </div>

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>
</html>
