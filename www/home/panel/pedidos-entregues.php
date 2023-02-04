<?php
include_once('../../class/redirect.php');
session_start();
if (!isset($_SESSION['usuario'])) redirecionar("../index.php");

include_once("../../class/connection.php");
$pdo = conectar();

$sql = "SELECT idmovimento FROM movimentos WHERE aprovado = 'S' AND entregue = 'S' AND fk_idempresa = ?";
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
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon" />

    <!-- Importando o css do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../css/style-adm.css">

    <!-- Importando o css-->
    <link rel="stylesheet" href="../../css/style-pedidos-entregues.css">

    <!--Importando o css do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../css/style-panel-sidebar.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>
    <?php include("../../class/panel-header.php") ?>
    <?php include("../../class/panel-sidebar.php") ?>

    <body>
        <center><br>
            <div class="admREPORT">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg>
                <h1>Entregues</h1>
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
                                    <img src="../../img/food/<?php echo $produto['imagem'] ?> " alt="imagem" width="100px" height="100px">
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