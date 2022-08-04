<?php
// session_start();
//chamando a conexão com o bd
include_once "connection.php";

//criando uma variavel que guarda a conexão com o banco
$pdo = conectar();

// pegando o id que deve ser alterado
$descricao = $_GET['descricao'];

// sql para buscar somente o registro escolhido
$sql = "SELECT * FROM produtos WHERE nomeProduto = :D";

// preparando o sql para não aceitar comandos
$stmt = $pdo->prepare($sql);

// trocando o D pelo valor
$stmt->bindParam(":D", $descricao);

// executando o sql no banco
$stmt->execute();

// pegando os dados correspondente ao id selecionado
// PDO::FETCH_ASSOC = $variavel['campo']
// PDO::FETCH_OBJ = $variavel->campo

$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Categorias</title>
</head>

<body>
    <form method="post">
        <div>
            <label>Descrição: </label>
            <input type="text" name="descricao" value="">
        </div>
        <div>
            <input type="submit" name="btnAlterar" value="Alterar">
        </div>
    </form>
</body>

</html>
<?php
if (isset($_POST['btnBusca'])) {
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;

    $sql = "SELECT * FROM produtos WHERE nomeProduto = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $descricao);
}

?>