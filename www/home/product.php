<?php
session_start();
include_once('../class/redirect.php');
require_once("../class/connection.php");
$pdo = conectar();
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

    <!-- Importando o css -->
    <link rel="stylesheet" type="text/css" href="../css/style-product.css">


    <title>Mar & Sol Salgados - Produtos</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("../class/header.php"); ?>

    <main>
        <!--BARRA DE PESQUISA-->
        <div class="corpo">
            <div class="divBusca">
                <form method="POST">
                    <input type="text" class="txtBusca" id="busca" name="busca" placeholder="Buscar..." />
                    <button class="btnBusca" name="btnBusca" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['btnBusca'])) {
            $busca    = isset($_POST['busca']) ? $_POST['busca'] : ' ';
            $sql = "SELECT * FROM produtos WHERE nomeproduto LIKE ? AND status  = 'A'";
            $stmt = $pdo->prepare($sql);
            $buscaGeral = '%' . $busca . '%';
            $stmt->bindParam(1, $buscaGeral);
        } else {
            $sql = "SELECT * FROM produtos LIMIT 10";
            $stmt = $pdo->prepare($sql);
        }
        // preparando o sql para não aceitar sql injection
        $stmt->execute();
        if($stmt->rowCount() == 0) {
            echo '<script> alert("Nenhum produto encontrado!") </script>';
            redirecionar();
        }

        // pegando todos os dados da tabela
        $produto = $stmt->fetchAll();
        ?>

        <br><br><br><br>

        <ul class="produtos">
            <?php 
            foreach ($produto as $p) {
                if ($p['estoque'] > 0) { ?>
                    <li class="produto">
                        <img src="../img/food/<?php echo $p['imagem']; ?>" alt="<?php echo $p['nomeproduto']; ?>">
                        <h1 class="product-text"><?php echo $p['nomeproduto']; ?></h1>
                        <p class="product-text">Informações Nutricionais: <? echo $p['info']; ?> </p>
                        <h2 class="product-text">Preço: R$ <?php echo number_format($p['preco'], 2, ',', ''); ?></h2>
                        <h3 class="product-text">Quantidade Disponível: <?php echo $p['estoque']; ?> </h3>
                        <button class="btnComprar" name="btnComprar" type="submit" onclick="window.location.href = 'carrinho.php?ac=add&id=<?php echo $p['idproduto']; ?>'">Comprar</button>
                    </li>
            <?php }
            } ?>
        </ul>
    </main>

    <!-- Importando o Rodaré -->
    <?php include("../class/footer.php");
    exit(); ?>
</body>

</html>