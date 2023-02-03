<?php
include('../class/connection.php');
include_once('../class/redirect.php');
session_start();
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') redirecionar("../home/index.php");

$pdo = conectar();

$sql = "SELECT * FROM empresas";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$empresas = $stmt->fetchAll();

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
    <link rel="stylesheet" type="text/css" href="../css/style-clientes.css">

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
            <th></th>
                <th>Nome da Empresa</th>
                <th>Cliente</th>
                <th>Fone</th>
                <th>CNPJ</th>
                <th>Status</th>
            </tr>

            <?php
            foreach ($empresas as $e) {

            ?>
                <tr>
                    <div class="cart-info">
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg>
            </td>
                        <td>
                            <div class="centralizado">
                                <p><?php echo $e['nomeempresa']; ?></p>
                            </div>
                        </td>
                        </td>

                        <td>
                            <div class="centralizado">
                                <?php echo $e['nomecliente']; ?>
                            </div>
                        </td>

                        <td>
                            <div class="centralizado">
                                <?php echo $e['fone']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="centralizado">
                                <?php echo $e['cnpj']; ?>
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