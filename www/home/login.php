<?php
session_start();
include_once("../class/connection.php");
include_once("../class/redirect.php");
$pdo = conectar();
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

    <!-- Importando o css -->
    <link rel="stylesheet" type="text/css" href="../css/style-login.css">

    <title>Mar & Sol Salgados - Login</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("../class/header.php"); ?>


    <div id="login">
        <form class="card" method="POST">
            <div class="">
                <u>
                    <h1>Login</h1>
                </u>
            </div>
            <br><br>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="nome">Usuário</label>
                    <input type="text" id="usuario" name="usuario" autocomplete="off">
                </div>

                <div class="card-content-area">
                    <label for="nome">Senha</label>
                    <input type="password" id="password" name="senha" autocomplete="off">
                </div>
            </div>

            <div class="card-footer">
                <input type="submit" value="Login" name="btnLogin" class="submit">
                <p>Não possui uma conta?<u> <a href="cadastro.php"> Clique aqui!</u></a></p>
            </div>
        </form>
    </div>

    <?php include("../class/footer.php"); ?>

</body>
</html>

<?php

if (isset($_POST['btnLogin'])) {
    $usuario    = isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $senha      = isset($_POST['senha']) ? ($_POST['senha']) : null;
    $senha = md5($senha);

    if (empty($usuario) && empty($senha)) {
        echo "Necessário informar usuario e senha";
        exit();
    }

    $sql = "SELECT * FROM empresas WHERE emailcliente = :u AND senha = :s";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':u', $usuario);
    $stmt->bindParam(':s', $senha);
    $stmt->execute();

    $user = $stmt->fetchAll();
    $_SESSION['idUsuario'] = $user[0]['idempresa'];

    $_SESSION['nomeCompleto'] = $user[0]['nomecliente'];

    $_SESSION['empresa'] = $user[0]['nomeempresa'];

    $_SESSION['cnpj'] = $user[0]['cnpj'];

    $user = explode(' ', $user[0]['nomecliente'], 2);

    if ($stmt->rowCount() > 0) {
        $_SESSION['usuario'] = $user[0];

        $sql = "SELECT * FROM empresas WHERE emailcliente = :u";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':u', $usuario);
        $stmt->execute();

        $emp = $stmt->fetchAll();

        if ($emp[0]['status'] == 'A') {
            if ($emp[0]['tipo'] == 'A') $_SESSION['acesso'] = "Admin";
            else $_SESSION['acesso'] = "User";

            redirecionar("../home/index.php");
        } else {
            echo "<script> alert('O usuário escolhido está destivado') </script>";
        }

        exit();
    } else {
        echo "<script> alert('Usuário e/ou senha inválido(s)') </script>";
        exit();
    }
}
?>