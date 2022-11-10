<?php
require_once "connection.php";
$pdo = conectar();

$idestado = $_GET['estado'];

$stmt = $pdo->prepare("SELECT * FROM cidades WHERE fk_idestado = '$idestado' ORDER BY nomecidade");
$stmt->execute();

$rs = $stmt->fetchAll();
echo "<label for='nome' class='lab-cidade'>Cidade:</label><select name='cidade'";
foreach ($rs as $r) {
    echo "<option class='slc-cidade' value=";
    echo $r['idcidade'];
    echo ">";
    echo $r['nomecidade'];
    echo "</option";
}
echo "</select>";

?>
