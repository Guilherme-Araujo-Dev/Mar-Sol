<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando o BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-product.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    conectar(); 
    ?>

    <title>Mar & Sol Salgados - Produtos</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("class/header.php"); ?>

    <main>
        <!--BARRA DE PESQUISA-->
        <div id="corpo">
            <div id="divBusca">
            
                <img src="search3.png" alt=""/>
                
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                
                <button id="btnBusca">Buscar</button>
            </div>
        </div>
        <br><br><br><br>
        <!--BARRA DE PESQUISA-->
        <ul class="produtos">
            <div class="imagenss">
                <img src="../IMG/food/bcg.jpg" alt="salgado" width="300px">
                <p>Bolinho de batata com carne</p>
            </div>
                
            <div class="imagenss">
                <img src="comidas/Meu projeto (1).jpg"alt="salgado1" width="300px">
                <p>Bolinho de Batata com Frango</p>
            </div>
                <br>
            <div class="imagenss">
                <img src="comidas/Meu projeto (2).jpg" alt="salgado2" width="300px">
                <p>Bolinho de Carne</p>
            </div>
                
           
        </ul>
    </main>

    <!-- Importando o Rodaré -->
    <?php include("class/footer.php"); ?>
</body>

</html>