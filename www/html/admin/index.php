<?php
// Redirect to main page.
session_start();
include_once('../class/redirect.php');

if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 'Admin') redirecionar("../admin/adm-home.php");
else redirecionar("../home/index.php");

?>