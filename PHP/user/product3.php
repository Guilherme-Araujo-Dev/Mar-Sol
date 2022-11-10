<!-- Importando a Conexão com o Banco de Dados -->
<?php 
    session_start();
    include_once("../class/connection.php");
    conectar(); 
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
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS dos botoes-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-button.css">

    <!-- Importando o CSS do create_product-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-create_product.css">
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-adm.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

    <div class="sidebar">

        <div class="imgSIDEBAR">
            <img src="../../IMG/logo.png" alt="" width="150px" height="130px">
        </div>

        <header>Nome do ADM</header>
        <ul>
            <li>
                <a href="../adm/admHOME.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
            </li>

            <div class="home">
            <li>
                <a href="#"><i class="fa-solid fa-cookie-bite"></i> Produto</a>
            </li>
            </div>

            <li>
                <a href="../adm/admCLIENT.php"><i class="fa-solid fa-user"></i> Clientes</a>
            </li>

            <li>
                <a href="../adm/admEMPREGADOS.php"><i class="fa-solid fa-user-tie"></i> Empregados</a>
            </li>
            
            <li class="voltar">
                <a href="../adm/admPRODUCT.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
            </li>

        </ul>
    </div>
    <center><br>
        <div class="admCREATE">
            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg>
            <h1>Criar Produto</h1>
        </div>
    </center>
    <br>
    <form action="" method="post" class="botoesss">
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
        <p class="nomeproduto">Categoria:</p>
        <select type="text" name="categoria">
            <?php foreach ($categorias as $c) { ?>
                <option><?php echo $c['nomeCategoria']; ?></option>
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
    </form>

        

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