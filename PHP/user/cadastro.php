<!-- Importando a Conexão com o Banco de Dados -->
<?php
session_start();
include_once "../class/connection.php";
$pdo = conectar();
?>

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
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-cadastro.css">

    <title>Mar & Sol Salgados - Cadastro</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("../class/header.php"); ?>


    <?php
    $sql = "SELECT * FROM estado";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $estados = $stmt->fetchAll();
    ?>
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
                        <input id="nome" name="nomeUsuario" type="text" placeholder="Insira seu primeiro nome" maxlength="20" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">Fone:</label>
                        <input id="nome" name="fone" oninput="foneMask(this)" type="tel" placeholder="(45) 9 9999-9999" class="">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Empresa:</label>
                        <input id="nome" name="empresa" type="text" placeholder="Nome da empresa" maxlength="100" class="">
                    </div>
                    <div class="form-group col-5">
                        <label for="nome">CNPJ:</label>
                        <input id="nome" name="CNPJ" oninput="CNPJmask(this)" type="text" placeholder="00.000.000/0000-00" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="nome">Email:</label>
                        <input id="nome" name="email" type="email" placeholder="empresa@email.com" maxlength="100" class="">
                    </div>

                    <div class="form-group col-5">
                        <label for="nome">Senha:</label>
                        <input id="nome" name="senha" type="password" placeholder="Caracter especial e número" maxlength="32" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row col-5">
                        <label for="nome" class="lab-estado">Estado:</label> <br>
                        <select id="nome" type="text" name="estado" class="slc-estado">
                            <?php 
                            $cont = 0;
                            foreach ($estados as $e) { ?>
                                <option><?php echo $e['nomeestado']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <?php
                    $sql = "SELECT * FROM cidade WHERE status = 'A' AND fk_idestado = es";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':es', $estados[0]);
                    $stmt->execute();

                    $cidades = $stmt->fetchAll();
                    ?>

                    <div class="form-row col-5">
                        <label for="nome" class="lab-cidade">Cidade:</label> <br>
                        <?php
                        if (!count($cidades)) echo "Desculpe, nossos serviços não estão disponíveis no seu estado";
                        else { ?>
                            <select id="nome" type="text" name="cidade" class="slc-cidade">
                                <?php
                                foreach ($cidades as $c) { ?>
                                    <option><?php echo $c['nomecidade']; ?></option>
                            <?php }
                            } ?>
                            </select>
                    </div>
                </div>


                <div class="card-footer">
                    <input type="submit" value="Cadastrar" name="btnCadastro" class="submit">
                    <p>Já possui uma conta?<u> <a href="login.php"> Clique aqui!</u></a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- Importando o JS -->
    <script src="../../JS/mask.js"></script>

</body>

</html>

<?php

if (isset($_POST['btnCadastro'])) {
    $nomeUsuario    = isset($_POST['nomeUsuario']) ? $_POST['nomeUsuario'] : null;
    $sobrenome       = isset($_POST['sobrenome']) ? ($_POST['sobrenome']) : null;
    $fone            = isset($_POST['fone']) ? ($_POST['fone']) : null;
    $CNPJ            = isset($_POST['CNPJ']) ? ($_POST['CNPJ']) : null;
    $empresa         = isset($_POST['empresa']) ? ($_POST['empresa']) : null;
    $email           = isset($_POST['email']) ? ($_POST['email']) : null;
    $cidade          = isset($_POST['cidade']) ? ($_POST['cidade']) : null;
    $senha           = isset($_POST['senha']) ? ($_POST['senha']) : null;
    $endereco        = isset($_POST['endereco']) ? ($_POST['endereco']) : null;
    if (isset($_POST['estado'])) {
        $estado = $_POST['estado'];
        $sql = "SELECT * FROM estado WHERE nomeestado = :ct";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':et', $estado);
        $stmt->execute();

        $estado = $stmt->fetchAll();
        $estado = $estado[0][0];
    } else {
        null;
    }

    $nome = $nomeUsuario . " " . $sobrenome;
    $senha = md5($senha);

    if (empty($nomeUsuario) || empty($sobrenome) || empty($fone) || empty($CNPJ) || empty($empresa) || empty($email) || empty($cidade) || empty($senha) || empty($endereco)) {
        echo "Necessário preencher todos os campos";
        exit();
    }

    if (empty($estado)) $estado = "PR"; // Se o estado não for informado será definido por padrão como Paraná

    $sql = "INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES (:ne, :ec, :nc, :s, :f, :cj, :et, :c, :e)";
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
    } catch (PDOException $e) {
        echo "Por favor insira os dados da maneira correta";
    }
}
?>