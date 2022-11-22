<?php
// Redirect to main page.
session_start();

if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 'Admin') header("Refresh: 0;url=../Admin/adm-home.php");
else header("Refresh: 0;url=../Home/index.php");

?>