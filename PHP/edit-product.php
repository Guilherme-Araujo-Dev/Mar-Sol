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

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-edit_product.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    require_once "class/connection.php";
    $pdo = conectar();

    $sql = "SELECT * FROM categorias";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $categorias = $stmt->fetchAll();

    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>


    <!-- Importando o Cabeçalho -->
    <?php include("class/header.php"); ?>

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
        <select type="text" name="categoria">
            <?php foreach ($categorias as $c) { ?>
                <option><?php echo $c['nomeCategoria']; ?></option>
            <?php } ?>

        </select>
        </div>
        <input type="submit" value="Salvar" name="btnSalvar" class="submit">
        <button>Cancelar</button>
    </form>

    <div class="espacamento">
    </div>

    <!-- Importando o rodapé-->
    <?php include("class/footer.php"); ?>
</body>

</html>