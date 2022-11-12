<!-- Importando a Conexão com o Banco de Dados -->
<?php
include_once "../class/connection.php";
$pdo = conectar();

$stmt = $pdo->prepare("SELECT * FROM estados ORDER BY nomeestado");
$stmt->execute();
$rs = $stmt->fetchAll();
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

    <script type="text/javascript" src="../../JS/jquery.js"></script>
    <!-- 
        o script abaixo faz a magica de pegar os dados no primeiro select e
        chamar a rotina listaCidades.php passando o estado escolhido e gerando
        o processo de preenchimento do 2 select de forma dinamica. 
    -->
    <script>
        $(document).ready(function() {
            $('#estado').change(function() {
                $('#cidade').load('../class/get-estado.php?estado=' + $('#estado').val());
            });
        });
    </script>

    <title>Mar & Sol Salgados - Cadastro</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("../class/header.php"); ?>

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
                        <input id="nome" name="nomeUsuario" type="text" placeholder="Insira nome do operador" maxlength="100" class="">
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
                        <input id="nome" name="senha" type="password" placeholder="********" maxlength="32" class="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row col-5">
                        <label for="nome" class="lab-estado">Estado:</label> <br>
                        <select name="estado" id="estado" class="slc-estado">
                                <?php foreach ($rs as $r) { ?>
                                    <option value="<?php echo $r['idestado']; ?>"><?php echo $r['nomeestado']; ?></option>
                                <?php } ?>
                            </select>
                            <br><br>
                        </div>
                        <div id="cidade" class="lab-cidade"></div><br>
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
    <script src="../../JS/select-stades.js"></script>

</body>

</html>

<?php

if (isset($_POST['btnCadastro'])) {
    $nomeUsuario     = isset($_POST['nomeUsuario']) ? $_POST['nomeUsuario'] : null;
    $fone            = isset($_POST['fone'])        ? ($_POST['fone'])          : null;
    $CNPJ            = isset($_POST['CNPJ'])        ? ($_POST['CNPJ'])          : null;
    $empresa         = isset($_POST['empresa'])     ? ($_POST['empresa'])       : null;
    $email           = isset($_POST['email'])       ? ($_POST['email'])         : null;
    $senha           = isset($_POST['senha'])       ? ($_POST['senha'])         : null;
    $estado          = isset($_POST['estado'])      ? ($_POST['estado'])        : null;
    $cidade          = isset($_POST['cidades'])     ? ($_POST['cidades'])       : null;

    if (empty($nomeUsuario) || empty($fone) || empty($CNPJ) || empty($empresa) || empty($email) || empty($cidade) || empty($estado) || empty($senha) || empty($endereco)) {
        //echo "<script> alert('Necessário Preencher todos os campos'); </script>";
        //exit();
    }

    $senha = md5($senha); // Deixando a senha encriptografada

    $sql = "INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES (:ne, :ec, :nc, :s, :f, :cj)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ne', $empresa);
    $stmt->bindParam(':ec', $email);
    $stmt->bindParam(':nc', $nomeUsuario);
    $stmt->bindParam(':s', $senha);
    $stmt->bindParam(':f', $fone);
    $stmt->bindParam(':cj', $CNPJ);

    /*
    $stmt->bindParam(':es', $estado);
    $stmt->bindParam(':cd', $cidade);

    echo "Estado: " . $estado;
    echo "Cidade: " . $cidade;
*/
    try {
        $stmt->execute();
        echo "<script> alert('Você foi cadastrado com sucesso'); </script>";
    } catch (PDOException $e) {
        echo $e;
        //echo "<script> alert('Insira os dados de maneira correta'); </script>";
    }
}
?>