<?php
session_start();
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') echo "<meta http-equiv='refresh' content='0; URL=../Home/index.php'/>";

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
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-adm.css">

    <!-- Importando o CSS das caixas-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-edit-product.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../class/adm-sidebar.php"); ?>
    <center><br>
        <div class="admEDIT">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            <h1>Editar Produto</h1>
        </div>
    </center>

    <form action="" method="post" class="botoes pt-5 espacamento">
        <div class="pt-5">
            <p>Nome do Produto:</p>
            <input type="text" name="nome" />
        </div>
        <br>
        <div>
            <p>Peso:</p>
            <input type="text" name="peso" />
        </div>
        <br>
        <div>
            <p>Preço:</p>
            <input type="text" name="preco" />
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
        <br><br>
        </div>
        <input type="submit" value="Salvar" name="btnSalvar" class="submit">
        <button>Cancelar</button>
    </form>

    <div class="espacamento">
    </div>

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