<?php
include_once("../class/connection.php");
$pdo = conectar();
session_start();
if ($_SESSION['usuario'] == null) echo "<meta http-equiv='refresh' content='0; URL=login.php'/>";


// Consulta os dados da produto 
$sql        = "SELECT * FROM empresas WHERE idempresa = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', $_SESSION['idUsuario']);
$stmt->execute();

if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
}

if (isset($_GET['ac'])) {

  // adiciona ao carrinho

  if ($_GET['ac'] == 'add') {
    $id = intval($_GET['id']);
    if (!isset($_SESSION['carrinho'][$id])) {
      $_SESSION['carrinho'][$id] = 1;
    } else {
      $_SESSION['carrinho'][$id] += 1;
    }
  }

  if ($_GET['ac'] == 'del') {
    $id = intval($_GET['id']);
    if (isset($_SESSION['carrinho'][$id])) {
      unset($_SESSION['carrinho'][$id]);
    }
  }

  if ($_GET['ac'] == 'up' && count($_SESSION['carrinho']) != 0) {
    if (is_array($_POST['prod'])) {
      foreach ($_POST['prod'] as $id => $qtd) {
        $id = intval($id);
        $qtd = intval($qtd);
        if (!empty($qtd) || $qtd <> 0) {
          $_SESSION['carrinho'][$id] = $qtd;
        } else {
          unset($_SESSION['carrinho'][$id]);
        }
      }
    }
  }
  header("Location: carrinho.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
        <th>Preço</th>
        <th>Subtotal</th>
      </tr>

      <div class="container w-100 p-3">
        <div class="row justify-content-md-center">
          <div class="bg-light">

            <table class="table tabela">
              <form action="?ac=up" method="post">
                <?php
                if (count($_SESSION['carrinho']) == 0) {
                  echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                } else {
                  $total = 0;
                  $i = 0;

                  foreach ($_SESSION['carrinho'] as $id => $qtd) {
                    $sql = "SELECT * FROM produto WHERE codigoProduto = :p";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(':p', $id);
                    $stmt->execute();
                    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

                    $produto = $dados['descricao'];
                    $preco = number_format($dados['preco'], 2, ',', '.');
                    $sub = number_format($dados['preco'] * $qtd, 2, ',', '.');
                    $total += $dados['preco'] * $qtd;

                    $_SESSION['valor_total'] = $total;
                    $i++;
                    echo '
					<tr>
						<td><a href="?ac=del&id=' . $id . '"><img src="img/lixeira.png" width="20px" height="20px"></a></td>
						<td><b>' . $produto . '</b></td>
						<td><input type="text" style="text-align:right" size="3" name="prod[' . $id . ']" value="' . $qtd . '" /></td>
						<td style="text-align: right;">R$ ' . $preco . '</td>
						<td style="text-align: right;">R$ ' . $sub . '</td>
					</tr>';
                  }
                  $total = number_format($total, 2, ',', '.');

                  echo '<tr>
				<td colspan="2"><input class="btn btn-success col-12" type="submit" value="Atualizar Carrinho" /></td> </td>
				<td colspan="2" class="text-right font-weight-bold">Total</td><td class="font-weight-bold">R$ ' . $total . '</td></tr>';
                } ?>
              </form>

              <!--TOTAL DOS PRODUTOS-->
              <div class="total-price">
                <table>
                  <tr>
                    <td>Total</td>
                    <td>R$21.00</td>
                  </tr>
                </table>

              </div>
          </div>


    </table>
    <div class="row justify-content-md-center">
      <div class="col-6"><a class="btn btn-dark col-12" href="listaproduto.php">Continuar Comprando</a></td>
      </div>
      <div class="col-6"><button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#vendas">Fechar Venda</button></div>
    </div>
    <div class="modal fade" id="vendas" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Finalizando a venda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-group">
                <label class="col-form-label">Cliente:</label>
                <input type="text" name="cliente" value="<?php echo $clientes->nomeCliente; ?>">
              </div>
              <div class="form-group">
                <?php $hoje = date('d/m/Y'); ?>
                <label class="col-form-label">Data:</label>
                <input type="text" value="<?php echo $hoje; ?>" readonly="readonly">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="finalizaVenda" class="btn btn-primary">Fechar Venda</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php include("../class/footer.php"); ?>
</body>

</html>
<?php
if (isset($_POST['finalizaVenda'])) {

  $Movimentos = array(
    'tipo' => "S",
    'cliente' => (int) $_SESSION['cliente'],
    'dataCompra' => date('Y-m-d'),
    'valorTotal' => $_SESSION['valor_total']
  );

  $movimento   = $crud->insert($Movimentos);

  $_SESSION['ultimoId'] = $movimento[1];
  //var_dump($_SESSION);

  //inserindo os itens comprados 
  foreach ($_SESSION['carrinho'] as $id => $qtd) {

    $stm = $pdo->prepare("insert into itens (Venda_idVenda,Produto_codigoProduto,quantidade) values (?,?,?)");
    $stm->bindValue('1', $_SESSION["ultimoId"]);
    $stm->bindValue('2', $id);
    $stm->bindValue('3', $qtd);
    $stm->execute();


    unset($_SESSION['carrinho']);
    unset($_SESSION['valor_total']);

    header("Location: listaproduto.php");
  }
}
?>