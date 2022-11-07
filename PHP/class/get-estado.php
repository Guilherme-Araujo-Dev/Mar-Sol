<?php

$estado = $_POST['estado'];


$sql = "SELECT idestado FROM estado WHERE nomeestado = es";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':es', $estado);
$stmt->execute();


$estado = $stmt->fetch();

