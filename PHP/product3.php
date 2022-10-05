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

    <!-- Importando o CSS dos botoes-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-button.css">

    <!-- Importando o CSS do create_product-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-create_product.css">
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../CSS/style-adm.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    conectar(); 
    ?>

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <div class="sidebar">
        <header>Nome do ADM</header>
        <ul>
            <li>
                <a href="./adm/admHOME.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
            </li>

            <div class="home">
            <li>
                <a href="#"><i class="fa-solid fa-cookie-bite"></i> Produto</a>
            </li>
            </div>

            <li>
                <a href="./adm/admCLIENT.php"><i class="fa-solid fa-user"></i> Clientes</a>
            </li>

            <li>
                <a href="./adm/admEMPREGADOS.php"><i class="fa-solid fa-user-tie"></i> Empregados</a>
            </li>
            
            <li class="voltar">
                <a href="./adm/admPRODUCT.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
            </li>

        </ul>
    </div>

    

    <form action="" method="post" class="botoess">
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
        <select type="text" name="categoria">
            <?php foreach ($categorias as $c) { ?>
                <option><?php echo $c['nomeCategoria']; ?></option>
            <?php } ?>

        </select>
        <!-- 
        <div class="corpo">
            <legend>Escolha uma Imagem</legend>
            <input name="Imagem" type="file" name="Imagem">
        -->
        </div>
        <input type="submit" value="Salvar" name="btnSalvar" class="submit">
        <button>Cancelar</button>
    </form>

    <div class="excluir">
        n esquece de por a categoria aqui man,
        se eu n me engano ta no arquivo "create-product.php"<br> exclui isso tb, o css ta no arquivo "style-adm.css" (.excluir)
    </div>

        

<!--Importando o bootstrap-->

<script src="https://kit.fontawesome.com/a8239b02c3.js" crossorigin="anonymous"></script>

</body>

</html>

<?php

if (isset($_POST['btnSalvar'])) {
    $nome    = isset($_POST['nome']) ? $_POST['nome'] : null;
    $peso       = isset($_POST['peso']) ? ($_POST['peso']) : null;
    $preco            = isset($_POST['preco']) ? ($_POST['preco']) : null;
    $imagem            = isset($_POST['imagem']) ? ($_POST['imagem']) : null;
    if (isset($_POST['categoria'])) {
        $categoria = $_POST['categoria'];
        echo $categoria;
        $sql = "SELECT * FROM categorias WHERE nomeCategoria = :ct";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':ct', $categoria);
        $stmt->execute();

        $categoria = $stmt->fetchAll();
        $categoria = $categoria[0][0];
    } else {
        null;
    }


    if (empty($nome) || empty($peso) || empty($preco) || empty($categoria)) {
        echo "Necessário preencher todos os campos obrigatórios";
        exit();
    }

    $sql = "INSERT INTO produtos (nomeProduto, peso, preco, Categoria_idCategoria, imagem) VALUES (:nm, :ps, :pc, :ct, :im)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nm', $nome);
    $stmt->bindParam(':ps', $peso);
    $stmt->bindParam(':pc', $preco);
    $stmt->bindParam(':im', $imagem);
    $stmt->bindParam(':ct', $categoria);

    try {
        $stmt->execute();
        echo "Produto foi cadastrado com sucesso";
    } catch (PDOException $e) {
        echo "Por favor insira os dados da maneira correta: ";
    }
}
?>