<?php
session_start();
include('../class/connection.php');
include_once('../class/redirect.php');
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') redirecionar("../home/index.php");

$pdo = conectar();

$sql = "SELECT * FROM funcionarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$empregados = $stmt->fetchAll();

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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />

    <!-- Importando o css dos botoes-->
    <link rel="stylesheet" type="text/css" href="../css/style-button.css">

    <!-- Importando o css do sidebar-->
    <link rel="stylesheet" type="text/css" href="../css/style-empregados.css">

    <!-- Importando o css do header-->
    <link rel="stylesheet" type="text/css" href="../css/style-header.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("../class/connection.php");
    conectar();
    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../class/adm-sidebar.php"); ?>
    <center><br>
        <div class="admCLIENT">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            <h1>Empregados</h1>
        </div>

    </center>
    <br><br>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Nome do Empregado</th>
                <th>Fone</th>
                <th>CPF</th>
                <th>Status</th>
            </tr>

            <?php
            foreach($empregados as $e) {

            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <div>
                            <p><?php echo $e['nomefuncionario']; ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="centralizado">
                        <?php echo $e['fone']; ?>
                    </div>
                </td>
                <td>
                    <div class="centralizado">
                        <?php echo $e['cpf']; ?>
                    </div>
                </td>
                <td>
                    <div class="centralizado">
                        <?php echo $e['status']; ?>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <!--Importando o bootstrap-->

    <script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>