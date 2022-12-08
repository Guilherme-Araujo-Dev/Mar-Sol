<?php
session_start();
if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'Admin') echo "<meta http-equiv='refresh' content='0; URL=../Home/index.php'/>";

include_once("../class/connection.php");
$pdo = conectar();
$sql = "SELECT * FROM categorias WHERE status = 'A'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll();

$sql = "SELECT * FROM produtos WHERE status = 'A'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produto = $stmt->fetchAll();
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
    <link rel="stylesheet" type="text/css" href="../CSS/style-delet-product.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <?php include("../class/adm-sidebar.php"); ?>
    <center><br>
        <div class="admDELET">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
            <h1 >Deletar Produtos</h1>
        </div>
    </center>

    <form method="post" class="botoes pt-5 espacamento">
        <div class="pt-5">
            <p>Selecione o Produto:</p>
            <select type="text" name="id">
                <?php foreach ($produto as $p) { ?>
                    <option value="<?php echo $p['idproduto'] ?>"><?php echo $p['nomeproduto']; ?></option>
                <?php } ?>
            </select>
        </div>
        <br>
        
        <input type="submit" value="Deletar" name="btnDeletar" class="submit">
        <button>Cancelar</button>
    </form>

    <div class="espacamento">
    </div>

    <script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['btnDeletar'])) {
    $id    = isset($_POST['id']) ? $_POST['id'] : null;

    if (empty($id)) {
        echo "Necessário preencher todos os campos obrigatórios";
        exit();
    }

    $sql = "UPDATE FROM produtos (status, estoque) VALUES ('I', 0) WHERE idproduto = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    try {
        $stmt->execute();
        echo "<script> alert('Produto foi deletado com sucesso') </script>";
    } catch (PDOException $e) {
        echo "<script> alert('Por favor insira os dados da maneira correta') </script>";
    }
}

?>