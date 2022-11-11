<?php
require_once "connection.php";
$pdo = conectar();

$idestado = $_GET['estado'];

$stmt = $pdo->prepare("SELECT * FROM cidades WHERE fk_idestado = '$idestado' ORDER BY nomecidade");
$stmt->execute();

$rs = $stmt->fetchAll();

echo "<label for='nome' class='lab-cidade'>Cidade:</label>";

if($rs) {
    echo "<select id='cidades' name='cidades'";
    foreach ($rs as $r) {
        echo "<option class='slc-cidade' value=";
        echo $r['idcidade'];
        echo ">";
        echo $r['nomecidade'];
        echo "</option>";
    }
    echo "</select>";
} 
else {
    echo "<label class='lab-cidade' style=''> Desculpe, nossos serviços não estão disponíveis na sua região </label>";
}




?>
