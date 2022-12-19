<?php
// Redirect to main page.
include_once('../Class/redirect.php');
session_start();

if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 'Admin') redirecionar("../Admin/adm-home.php");
else redirecionar("../Home/index.php");

?>