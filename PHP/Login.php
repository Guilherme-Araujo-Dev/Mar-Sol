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
    
    <div class="forms">
        
        <br>

        <form method="POST">
        <div class="form">
            <label for="nome">Email</label>
            <input id="nome" name="nome" type="text" placeholder="Seu email" class="campo">
        </div>

        <div class="form">
            <label for="nome">Senha</label>
            <input id="nome" name="nome" type="text" placeholder="Sua senha" class="campo">
        </div>
        <br>
        <button type="submit" name="btnSalvar" class="btn btn-primary">Enviar</button>
        <button type="reset" name="btnLimpar" class="btn btn-warning">Limpar</button>

    </form>
            
        <br>
        <p>Não possui uma conta?<a href="Cadastro.php"> <u>Clique aqui</u></a></p>
    </div>
    
    
</body>
</html>

