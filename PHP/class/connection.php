<?php

$conectar = function()  {
    $pdo = new PDO('mysql:host=;dbname=marESol', 'root', '');
    return $pdo;
}

