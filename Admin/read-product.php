<?php
include('../Class/connection.php');
session_start();
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') echo "<meta http-equiv='refresh' content='0; URL=../Home/index.php'/>";

$pdo = conectar();

$sql = "SELECT * FROM produtos WHERE status = 'A'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();

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
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-adm.css">

    <!-- Importando o CSS-->
    <link rel="stylesheet" href="../CSS/style-report-product.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../class/adm-sidebar.php"); ?>
    <center><br>
        <div class="admREPORT">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
            </svg>
            <h1>Relatórios</h1>
        </div>
    </center>
    <br><br>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th class="codigo">Código</th>
                <th>Produto</th>
                <th>Peso</th>
                <th>Preço</th>  
                <th>Estoque</th>
            </tr>

            <?php
            foreach ($produtos as $p) {

            ?>
                <!--Primeira linha-->
                <tr>
                    <!--Código-->
                    <td>
                        <div>
                            <p><?php echo $p['idproduto']; ?></p>
                        </div>
    </div>
    </td>

    <!--Produto-->
    <td>
        <div>
        <p>
                <?php echo $p['nomeproduto']; ?>
            </p>
        </div>
    </td>

    <!--Peso-->
    <td>
        <div>
            <?php echo $p['peso']; ?> KG
        </div>
    </td>

    <!--Preço-->
    <td>
        <div>
        <p>
                R$ <?php echo $p['preco']; ?>
            </p>
        </div>
    </td>

    <!--Estoque-->
    <td>
        <div>
            <p>
                <?php echo $p['estoque']; ?>
            </p>
        </div>
    </td>

    </tr>
<?php
            }
?>

<!--
    1. O tr cria uma nova linha dentro da tabela
    2. Para colocar novos textos NA MESMA LINHA tem que usar o td dentro do tr
-->
</table>
</div>


<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>