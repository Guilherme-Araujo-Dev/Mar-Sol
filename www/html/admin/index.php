<?php
// Redirect to main page.
include_once('../class/redirect.php');
session_start();

if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 'Admin') redirecionar("../admin/adm-home.php");
else redirecionar("../home/index.php");

?>