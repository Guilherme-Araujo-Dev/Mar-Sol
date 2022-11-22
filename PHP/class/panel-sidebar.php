<!--Importando o CSS do sidebar-->
<link rel="stylesheet" type="text/css" href="../CSS/style-panel-sidebar.css">

<div class="sidebar">

    <div class="perfil">
        <a href="../Panel/profile.php"><p><?php echo $_SESSION['usuario'] ?></p></a>
    </div>

        <ul>
            <li>
                <a href="pedidos-andamentos.php"> Pedidos Encaminhados</a>
            </li>

            <li>
                <a href="pedidos-entregar.php"> Pedidos à Entregar</a>
            </li>

            <li>
                <a href="pedidos-entregues.php"> Pedidos Entregues</a>
            </li>

            <li>
                <a href="pedidos-cancelados.php"> Pedidos Cancelados</a>
            </li>

            <li>
                <a href="../logoff.php" name> Sair da Conta </a>
            </li>

        </ul>
    </div>
</div>