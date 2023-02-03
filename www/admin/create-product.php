<?php
include_once('../class/redirect.php');
session_start();
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') redirecionar("../home/index.php");

include_once("../class/connection.php");
$pdo = conectar();
$sql = "SELECT * FROM categorias WHERE status = 'A'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll();
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
    <link rel="stylesheet" type="text/css" href="../css/style-adm.css">

    <!-- Importando o css do sidebar-->
    <link rel="stylesheet" href="../css/style-product3.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>
    <?php include("../class/adm-sidebar.php"); ?>
    <center><br>
        <div class="admCREATE">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
            <h1> Criar Produto</h1>
        </div>
    </center>
    <br>
    <form action="" method="post" class="form">
        <div>
            <p class="nomeproduto">Nome do Produto:</p>
            <input type="text" id="caixa" name="nome" />
        </div>
        <br>
        <div>
            <p class="nomeproduto">Peso:</p>
            <input type="text" id="caixa" name="peso" />
        </div>
        <br>
        <div>
            <p class="nomeproduto">Preço:</p>
            <input type="text" id="caixa" name="preco" />
        </div>
        <br>
        <div>
            <p class="nomeproduto">Estoque:</p>
            <input type="number" id="caixa" name="estoque" />
        </div>
        <br>
        <p class="nomeproduto">Categoria:</p>
        <select type="text" name="categoria">
            <?php foreach ($categorias as $c) { ?>
                <option value="<?php echo $c['idcategoria'] ?>"><?php echo $c['nomecategoria']; ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        <!-- 
        <div class="corpo">
            <legend>Escolha uma Imagem</legend>
            <input name="Imagem" type="file" name="Imagem">
        -->
        </div>
        <input type="submit" value="Salvar" name="btnSalvar" class="submit">
        <button>Cancelar</button>




        <!--Importando o bootstrap-->

        <script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>

<?php

if (isset($_POST['btnSalvar'])) {
    $nome    = isset($_POST['nome']) ? $_POST['nome'] : null;
    $peso       = isset($_POST['peso']) ? ($_POST['peso']) : null;
    $preco            = isset($_POST['preco']) ? ($_POST['preco']) : null;
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;
    $estoque = isset($_POST['estoque']) ? $_POST['estoque'] : null;

    if (empty($nome) || empty($peso) || empty($preco) || empty($categoria)) {
        echo "Necessário preencher todos os campos obrigatórios";
        exit();
    }

    $sql = "INSERT INTO produtos (nomeProduto, peso, preco, estoque, fk_idcategoria) VALUES (:nm, :ps, :pc, :es, :ct)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nm', $nome);
    $stmt->bindParam(':ps', $peso);
    $stmt->bindParam(':pc', $preco);
    $stmt->bindParam(':es', $estoque);
    $stmt->bindParam(':ct', $categoria);

    try {
        $stmt->execute();
        echo "<script> alert('Produto foi cadastrado com sucesso') </script>";
    } catch (PDOException $e) {
        echo "<script> alert('Por favor insira os dados da maneira correta') </script>";
    }
}
?>