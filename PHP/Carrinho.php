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
  <link rel="stylesheet" type="text/css" href="../CSS/style-carrinho.css">

  <!-- Importando a Conexão com o Banco de Dados -->
  <?php include_once("class/connection.php");
  conectar();
  ?>

  <title>Mar & Sol Salgados - Carrinho</title>
</head>

<body>

  <!-- Importando o Cabeçalho -->
  <?php include("class/header.php"); ?>

  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>TÍTULO DO SITE</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style>
      body {
        font-family: 'Titillium Web', sans-serif;
        color: #666666;
        text-align: center;
      }

      .box {
        background-color: #fff;
        width: 500px;
        margin: 50px auto;
      }

      #title {
        font-size: 30px;
        margin-top: 25px;
      }

      #descricao {
        font-size: 20px;
        margin: 20px auto;
      }

      #logo {
        margin-top: 25px;
        max-width: 365px;
        height: auto;
      }

      #logo-task {
        width: 75px;
      }
    </style>
  </head>

  <body>
    <div class="box">
      <img src="../IMG/logo.png" alt="" width="80" height="60">
      <div id="title">
        SITE EM ANDAMENTO
      </div>
      <div id="descricao">
        (45) 99937-6829<br>
        E-mail: maresolsalgados@contato.com
      </div>
      <a href="index.php">
        <img src="../IMG/logo.png" alt="" width="80" height="60">
      </a>
    </div>
  </body>

  </html>


</body>

</html>