<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando o BootStrap -->
    <!--Bootstrap do formulário-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Definindo o Ícone da Página -->
    <link rel="shortcut icon" href="../IMG/favicon.ico" type="image/x-icon" />

    <!-- Importando o CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/style-cadastro.css">

    <!-- Importando a Conexão com o Banco de Dados -->
    <?php include_once("class/connection.php");
    conectar();
    ?>

    <title>Mar & Sol Salgados - Cadastro</title>
</head>

<body>

    <!-- Importando o Cabeçalho -->
    <?php include("class/header-file.php"); ?>



    <div class="corpo horizontal-center"> 
            <div class="container ">
                <div class="forms-header">
                    
                    <u><h1>Cadastro</h1></u>
                </div>
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="nome">Seu Primeiro nome:</label>
                            <input id="nome" name="nome" type="text" placeholder="" class="">
                        </div>
                        <div class="form-group col-5">
                            <label for="nome">Fone:</label>
                            <input id="nome" name="nome" type="text" placeholder="Número pessoal" class="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="nome">Seu segundo nome:</label>
                            <input id="sobrenome" name="sobrenome" type="text" placeholder="" class="">
                        </div>
                        <div class="form-group col-5">
                            <label for="nome">CNPJ:</label>
                            <input id="nome" name="nome" type="text" placeholder="CNPJ da empresa" class="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="nome">Empresa:</label>
                            <input id="nome" name="nome" type="text" placeholder="Nome da empresa" class="">
                        </div>
                        <div class="form-group col-5">
                            <label for="nome">Estado:</label>
                            <input id="nome" name="nome" type="text" placeholder="Apenas siglas" class="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="nome">Email:</label>
                            <input id="nome" name="nome" type="text" placeholder="Pessoal ou Profissional" class="">
                        </div>
                        <div class="form-group col-5">
                            <label for="nome">Cidade:</label>
                            <input id="nome" name="nome" type="text" placeholder="" class="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="nome">Senha:</label>
                            <input id="nome" name="nome" type="password" placeholder="*Requisitos para a senha*" class="">
                        </div>
                        <div class="form-group col-5">
                            <label for="nome">Endereço:</label>
                            <input id="nome" name="nome" type="text" placeholder="" class=""><!--Para deixar redondinho, colocar: form-control no class=""-->
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Cadastrar" class="submit">
                        <p>Já possui uma conta?<u> <a href="Login.php"> Clique aqui!</u></a></p>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>