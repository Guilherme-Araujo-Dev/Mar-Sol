<?php

function conectar() {
    $pdo = new PDO('mysql:host=localhost;dbname=marESol', 'root', '');
    
    return $pdo;
}

?>