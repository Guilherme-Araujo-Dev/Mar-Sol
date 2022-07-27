<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>TCC</title>
    <style>
        
    </style>

</head>
<header>
    <div class="logozinho">
        <a href="index.php"><img src="../IMG/nnovologo.png" alt="logo"></a>
    </div>
        

    <ul>
            <a href="index.php"><li>Início</li></a>
            <a href="Produto.php"><li>Produtos</li></a>
            <a href="Sobre nos.php"><li>Sobre nós</li></a>
            <a href="Fazer pedido.php"><li>Fazer Pedido</li></a>
                        
            
            <div class="perfil_carrinho">
                <a href="Carrinho.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                </a>
                

                <a href="Login.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
            </div>

    </ul>
</header>
<body>
<form method="POST">
    <div class="forms">
        <div class="form-group">
            <label>Nome do Cliente:</label>
            <input type="text" name="cliente" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Nome da Empresa:</label>
            <input type="text" name="empresa" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>CNPJ:</label>
            <input type="text" name="CNPJ" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="fone" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Senha:</label>
            <input type="text" name="senha" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Estado:</label>
            <input type="text" name="estado" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Cidade:</label>
            <input type="text" name="cidade" class="form-control col-6">
        </div>
        <br>
        <div class="form-group">
            <label>Endereco:</label>
            <input type="text" name="Endereco" class="form-control col-6">
        </div>
        <br>
        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
        <button type="reset" name="btnLimpar" class="btn btn-warning">Limpar</button>
</div class="forms">
    </form>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<?php
require_once "Conexao.php";

$pdo = conectar();

if (isset($_POST['btnEnviar'])) {

    // buscar o conteudo do input Cadastro
    $cliente = isset($_POST['cliente']) ? $_POST['cliente'] : null;
    $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $CPNJ = isset($_POST['CNPJ']) ? $_POST['CNPJ'] : null; 
    $fone = isset($_POST['fone']) ? $_POST['fone'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;

    echo "Cliente" + $cliente;
    echo "email" + $email;
    echo "CNPJ" + $CPNJ;
    echo "Estado" + $estado;
    
// validando os dados vindos (opcional)
    if (empty($cliente)) {
        echo "Necessário informar o nome do Cliente";
        exit();
    }
    if (empty($empresa)) {
        echo "Necessário informar o nome da Empresa";
        exit();
    }
    if (empty($email)) {
        echo "Necessário informar o Email";
        exit();
    }
    if (empty($fone)) {
        echo "Necessário informar o Telefone";
        exit();
    }
    if (empty($senha)) {
        echo "Necessário informar a Senha";
        exit();
    }
    if (empty($estado)) {
        echo "Necessário informar o Estado";
        exit();
    }
    if (empty($cidade)) {
        echo "Necessário informar a Cidade";
        exit();
    }
    if (empty($endereco)) {
        echo "Necessário informar o Endereço";
    }

    echo $cliente;
    echo $email;
    echo $CPNJ;
    echo $estado;

    // criando a sql 
    $sql = "INSERT INTO Empresa (nomeCliente, nomeEmpresa, emailCliente, CNPJ, fone, senha, estado, 
    cidade, endereco) VALUES (:nc, :ne, :ec, :cnpj, :f, :s, :e, :c, :erc);";
    
echo $sql;
    
    // preparando o sql para receber os dados
    $stmt = $pdo->prepare($sql);
    // troca dos dados pelo que esta vindo no formulário
    $stmt->bindParam(':nc', $cliente);
    $stmt->bindParam(':ne', $empresa);
    $stmt->bindParam(':ec', $email);
    $stmt->bindParam(':cnpj', $CPNJ);
    $stmt->bindParam(':f', $fone);
    $stmt->bindParam(':s', $senha);
    $stmt->bindParam(':e', $estado);
    $stmt->bindParam(':c', $cidade);
    $stmt->bindParam(':erc', $endereco);


    echo $stmt;

    if ($stmt->execute()) {
        echo "Registro inserido com sucesso";
    }
}

?>