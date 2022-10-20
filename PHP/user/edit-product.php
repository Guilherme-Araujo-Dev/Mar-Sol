<!-- Importando a Conexão com o Banco de Dados -->
<?php
    session_start();
    require_once ("../class/connection.php");
    $pdo = conectar();

    $sql = "SELECT * FROM categorias";
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
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />
    
    <!-- Importando o CSS do sidebar-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-adm.css">

    <!-- Importando o CSS das caixas-->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-edit.css">

    <title>Mar & Sol - Painel do Administrador</title>
</head>

<body>

<div class="sidebar">
        <header>Nome do ADM</header>
        <ul>
            <li>
                <a href="./adm/admHOME.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
            </li>

            <li>
                <a href="./adm/admPRODUCT.php"><i class="fa-solid fa-cookie-bite"></i> Produto</a>
            </li>

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
    <center> Página EDITAR PRODUTO</center>


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
        <p class="nomeproduto">Categoria:</p>
        <select type="text" name="categoria">
            <?php foreach ($categorias as $c) { ?>
                <option><?php echo $c['nomeCategoria']; ?></option>
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