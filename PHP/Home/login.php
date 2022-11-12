<?php
include_once("../class/connection.php");
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
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-login.css">

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

    $sql = "SELECT emailcliente FROM empresas WHERE emailcliente = :u AND senha = :s";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':u', $usuario);
    $stmt->bindParam(':s', $senha);
    $stmt->execute();
    $user = explode('@', $usuario, 2);
    $user[0] = explode('.', $user[0], 2);
    $user_b = explode(' ', $user[0][0], 2);

    if ($stmt->rowCount() > 0) {
        $_SESSION['usuario'] = strtoupper($user_b[0]);

        $sql = "SELECT * FROM empresas WHERE emailcliente = :u";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':u', $usuario);
        $stmt->execute();

        $emp = $stmt->fetchAll();

        if ($emp[0]['status'] == 'A') {
            if ($emp[0]['tipo'] == 'A') $_SESSION['acesso'] = "Admin";
            else $_SESSION['acesso'] = "User";
        } else {
            //echo "<script> alert('O usuário escolhido está destivado') </script>";
        }

        exit();
    } else {
        echo "<script> alert('Usuário e/ou senha inválido(s)') </script>";
        exit();
    }
}
?>