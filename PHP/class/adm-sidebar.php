

<link rel="stylesheet" type="text/css" href="../../CSS/style-sidebar.css">

<div class="sidebar">

        <div class="imgSIDEBAR">
            <img src="../../IMG/logo.png" alt="" width="150px" height="130px">
        </div>

        <p> <?php echo $_SESSION['usuario'] ?> </p>
        <ul>
            <li>
                <a href="../Admin/adm-home.php"><i class="fa-sharp fa-solid fa-house"> Home</i></a>
            </li>

            <li>
                <a href="../Admin/adm-products.php"><i class="fa-solid fa-cookie-bite"> Produtos</i></a>
            </li>

            <li>
                <a href="../Admin/adm-clients.php"><i class="fa-solid fa-user"> Clientes</i></a>
            </li>


            <li>
                <a href="../Admin/adm-employees.php"><i class="fa-solid fa-user-tie"> Empregados</i></a>
            </li>
            
            <li class="voltar">
                <a href="../Home/index.php"><i class="fa-solid fa-arrow-left"></i> Voltar ao Site</a>
            </li>

        </ul>
    </div>