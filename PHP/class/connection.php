<?php

function conectar()  {
    $pdo = new PDO('mysql:host=;dbname=marESol', 'root', '');
    return $pdo;
};

