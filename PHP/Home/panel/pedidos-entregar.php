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
   <link rel="stylesheet" href="../../../CSS/style-pedidos-entregar.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

<?php include("../../Class/panel-header.php") ?>
<?php include("../../Class/panel-sidebar.php") ?>


<body>
<center><br>
        <div class="admREPORT">
        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
            <h1>Entregar</h1>
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
                        <img src="../../../IMG/food/ccg.jpg" alt="imagem" width="100px" height="100px">
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
