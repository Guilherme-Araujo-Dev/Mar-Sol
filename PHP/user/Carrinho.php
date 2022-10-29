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

  <!-- Importando o CSS -->
  <link rel="stylesheet" type="text/css" href="../../CSS/style-carrinho.css">

  <title>Mar & Sol Salgados - Carrinho</title>
</head>

<body>

  <!-- Importando o Cabeçalho -->
  <?php include("../class/header.php"); ?>


<br>
    <div class="imgCARRINHO">
      <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </svg>

      <h1>Carrinho de compras</h1>
    </div>

    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Total parcial</th>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="../../IMG/food/bbf.jpg">
              <div>
                <p>Bolinho de batata com frango</p>
                <small>Preço: R$21.00</small><br>
                <a href="">Remover</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1"></td>
          <td>R$21.00</td>
        </tr>

      <!--SUBTOTAL DOS PRODUTOS-->
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Exemplo</td>
            <td>R$200.00</td>
          </tr>
          <tr>
            <td>Exemplo</td>
            <td>R$200.00</td>
          </tr>
          <tr>
            <td>Exemplo</td>
            <td>R$200.00</td>
          </tr>
        </table>
      </div>
    </div>



    <?php include("../class/footer.php"); ?>


</body>

</html>