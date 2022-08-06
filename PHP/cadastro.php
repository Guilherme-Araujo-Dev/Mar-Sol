<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando o BootStrap -->
    <!--Bootstrap do formulário-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-cadastro.css">

    <!-- Importando o JS -->
    <script src="../JS/mask.js"></script>

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php
    session_start();
    include_once "class/connection.php";
    $pdo = conectar();
    ?>

    <title>Mar & Sol Salgados - Cadastro</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("class/header.php"); ?>



    <div class="corpo horizontal-center">
        <div class="container ">
            <div class="forms-header">

                <u>
                    <h1>Cadastro</h1>
                </u>
            </div>
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Nome:</label>
                        <input id="nome" name="primeiroNome" type="text" placeholder="Insira seu primeiro nome" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">Fone:</label>
                        <input id="nome" name="fone" oninput="foneMask(this)" type="tel" placeholder="(45) 9 9999-9999" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Sobrenome:</label>
                        <input id="sobrenome" name="sobrenome" type="text" placeholder="Insira seu sobrenome" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">CNPJ:</label>
                        <input id="nome" name="CNPJ" oninput="CNPJmask(this)" type="text" placeholder="00.000.000/0000-00" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Empresa:</label>
                        <input id="nome" name="empresa" type="text" placeholder="Nome da empresa" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">Estado:</label>
                        <input id="nome" name="estado" type="text" placeholder="PR" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Email:</label>
                        <input id="nome" name="email" type="email" placeholder="empresa@email.com" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">Cidade:</label>
                        <input id="nome" name="cidade" type="text" placeholder="Cidade onde se localiza a Empresa" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Senha:</label>
                        <input id="nome" name="senha" type="password" placeholder="*Requisitos para a senha*" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">Endereço:</label>
                        <input id="nome" name="endereco" type="text" placeholder="Endereço da Empresa" class="">
                        <!--Para deixar redondinho, colocar: form-control no class=""-->
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Cadastrar" name="btnCadastro" class="submit">
                    <p>Já possui uma conta?<u> <a href="Login.php"> Clique aqui!</u></a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['btnCadastro'])) {
    $primeiroNome    = isset($_POST['primeiroNome']) ? $_POST['primeiroNome'] : null;
    $sobrenome       = isset($_POST['sobrenome']) ? ($_POST['sobrenome']) : null;
    $fone            = isset($_POST['fone']) ? ($_POST['fone']) : null;
    $CNPJ            = isset($_POST['CNPJ']) ? ($_POST['CNPJ']) : null;
    $empresa         = isset($_POST['empresa']) ? ($_POST['empresa']) : null;
    $email           = isset($_POST['email']) ? ($_POST['email']) : null;
    $cidade          = isset($_POST['cidade']) ? ($_POST['cidade']) : null;
    $senha           = isset($_POST['senha']) ? ($_POST['senha']) : null;
    $estado           = isset($_POST['estado']) ? ($_POST['estado']) : null;
    $endereco        = isset($_POST['endereco']) ? ($_POST['endereco']) : null;

    $nome = $primeiroNome . " " . $sobrenome;

    if(empty($primeiroNome) || empty($sobrenome) || empty($fone) || empty($CNPJ) || empty($empresa) || empty($email) || empty($cidade) || empty($senha) || empty($endereco)){
        echo "Necessário preencher todos os campos";
        exit();
    }

    if(empty($estado)) $estado = "PR"; // Se o estado não for informado será definido por padrão como Paraná

    $sql = "INSERT INTO Empresas (nomeEmpresa, emailCliente, nomeCliente, senha, fone, CNPJ, estado, cidade, endereco) VALUES (:ne, :ec, :nc, :s, :f, :cj, :et, :c, :e)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ne', $empresa);
    $stmt->bindParam(':ec', $email);
    $stmt->bindParam(':nc', $nome);
    $stmt->bindParam(':s', $senha);
    $stmt->bindParam(':f', $fone);
    $stmt->bindParam(':cj', $CNPJ);
    $stmt->bindParam(':et', $estado);
    $stmt->bindParam(':c', $cidade);
    $stmt->bindParam(':e', $endereco);

    try {
        $stmt->execute();
        echo "Você foi cadastrado com sucesso";
    } catch(Exception $e) {
        echo "Por favor insira os dados da maneira correta";
    }
}
?>
