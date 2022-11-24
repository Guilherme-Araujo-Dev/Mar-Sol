<?php
session_start();
if (!isset($_SESSION['usuario'])) echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";

include_once("../../Class/connection.php");
$pdo = conectar();

$sql = "SELECT idmovimento FROM movimentos WHERE aprovado = 'S' AND entregue = 'N' AND fk_idempresa = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $_SESSION['idUsuario']);
$stmt->execute();

$idMovimento = $stmt->fetch();
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
    <link rel="stylesheet" type="text/css" href="../../CSS/style-panel-sidebar.css">

    <!-- Importando o CSS-->
    <link rel="stylesheet" href="../../CSS/style-pedidos-entregar.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../../Class/panel-header.php") ?>
    <?php include("../../Class/panel-sidebar.php") ?>


    <body>
        <center><br>
            <div class="admREPORT">
                <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
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
                <th>Quantidade</th>
                <th>Nome do Produto</th>
            </tr>

            <?php
            if ($idMovimento) {

            foreach ($idMovimento as $movimento) {

                $sql = "SELECT * FROM movimento_itens WHERE fk_idmovimento = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $movimento);
                $stmt->execute();

                $itens = $stmt->fetchAll();

                
                    foreach ($itens as $i) {
                        $sql = "SELECT * FROM produtos WHERE idproduto = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(1, $i['fk_idproduto']);
                        $stmt->execute();

                        $produto = $stmt->fetchAll();
                        $produto = $produto[0];

            ?>
                        <tr>
                            <td>
                                <div>
                                    <img src="../../IMG/food/<?php echo $produto['imagem'] ?> " alt="imagem" width="100px" height="100px">
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
                                        <?php echo $i['quantidade'] ?>
                                    </p>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <p>
                                        <?php echo $produto['nomeproduto'] ?>
                                    </p>
                                </div>
                            </td>
                <?php
                    }
                }
            }
                ?>

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