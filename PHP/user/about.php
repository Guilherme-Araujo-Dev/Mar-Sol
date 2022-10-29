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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../../CSS/style-about.css">

    <title>Mar & Sol Salgados - Sobre</title>
</head>
<body>
    
    <?php include("../class/header.php"); ?>
    <br><br><br><br>

    <h1 class=""><b>+ DE 10 ANOS ATENDENDO TODA REGIÃO OESTE DO PARANÁ.</b></h1>
    <br><br>
    <div class="corpo">
        <p class="sobre">
            Situada em Cascavel/PR, nós somos<br> uma fábrica de alimentos industriais<br> que
            a mais de 10 anos atendemos<br> toda região Oeste do Paraná, com<br> muito amor,
            cuidado e dedicação.<br><br>
            Com produtos de qualidade,<br> excelência em atendimento
            e<br> responsabilidade para atender<br> as maiores redes de padarias e<br> supermercados
            da cidade.<br><br>
            
        </p>
        

        <div class="img-pessoa">
            <img src="../../IMG/pessoa.png" alt="img-pessoa">
        </div>
    </div>

    <div class="u">
        <u>Segue abaixo nossa localização!👇</u>
    </div>

    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.092903759942!2d-53.47620168499512!3d-24.96295358400564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d423c85d58c7%3A0xb28698b3771103c9!2sMar%20%26%20Sol%20Salgados!5e0!3m2!1spt-BR!2sbr!4v1651599650908!5m2!1spt-BR!2sbr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <?php include("../class/footer.php"); ?>

    
</body>
    
</html>