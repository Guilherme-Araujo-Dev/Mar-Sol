<link rel="stylesheet" type="text/css" href="../css/style-sidebar.css">
<link rel="stylesheet" type="text/css" href="../css/style-adm.css">


<div class="sidebar">

    <div class="imgSIDEBAR">
        <img src="../img/logo.png" alt="" width="150px" height="130px">
    </div>

    <p> <?php echo $_SESSION['usuario'] ?> </p>
    <ul>
        <li>
            <a href="../admin/adm-home.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
        </li>

        <li>
            <a href="../admin/adm-products.php"><i class="fa-solid fa-cookie-bite"></i> Produtos</a>
        </li>

        <li>
            <a href="../admin/adm-clients.php"><i class="fa-solid fa-user"></i> Clientes</a>
        </li>


        <li>
            <a href="../admin/adm-employees.php"><i class="fa-solid fa-user-tie"></i> Empregados</a>
        </li>

        <li class="voltar">
            <a href="../home/index.php"><i class="fa-solid fa-arrow-left"></i> Voltar ao Site</a>
        </li>

    </ul>
</div>