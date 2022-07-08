<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Categoria</title>
</head>

<body>
    <h1>Inclusão</h1>

    <form method="POST">
        <div class="form-group">
            <label>Código:</label>
            <input type="text" name="codigo" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Nome Cidade:</label>
            <input type="text" name="nome" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Estado:</label>
            <input type="text" name="estado" class="form-control col-6">
        </div>
        <br>
        <button type="submit" name="btnSalvar" class="btn btn-primary">Enviar</button>
        <button type="reset" name="btnLimpar" class="btn btn-warning">Limpar</button>

    </form>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<?php
require_once "conexao.php";

$pdo = conectar();

if (isset($_POST['btnSalvar'])) {

    // buscar o conteudo do input descricao
    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
    $nome   = isset($_POST['nome']) ? $_POST['nome'] : null;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null;

    // validando os dados vindos (opcional)
    if (empty($codigo)) {
        echo "Necessário informar a descrição";
        exit();
    }
    if (empty($nome)) {
        echo "Necessário informar o nome da Cidade";
        exit();
    }
    if (empty($estado)) {
        echo "Necessário informar o Estado";
        exit();
    }

    // criando a sql 
    $sql = "INSERT INTO tb_cidades (cod_cid, nome_cid, estado) VALUES (:c, :n, :e);";
    // preparando o sql para receber os dados
    $stmt = $pdo->prepare($sql);
    // troca dos dados pelo que esta vindo no formulário
    $stmt->bindParam(':c', $codigo);
    $stmt->bindParam(':n', $nome);
    $stmt->bindParam(':e', $estado);

    if ($stmt->execute()) {
        echo "Registro inserido com sucesso";
    }
}

?>