<?php

function conectar() {
    try {
        $pdo = new PDO("mysql:host=db;dbname=maresol", 'root', 'root');
        return $pdo;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}


