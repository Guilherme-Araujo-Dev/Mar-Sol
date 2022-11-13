<?php
session_start();
if (!isset($_SESSION['usuario'])) echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";
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
    <link rel="stylesheet" href="../../../CSS/style-pedidos-entregues.css">

    <!--Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../../CSS/style-panel-sidebar.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../../Class/panel-sidebar.php") ?>

    <body>
        <center><br>
            <div class="admREPORT">
                <h1>Entregues</h1>
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


                <td>
                    <div>
                        <img src="../../../IMG/food/bbcg.jpg" alt="imagem" width="100px" height="100px">
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