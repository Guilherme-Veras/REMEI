<?php

$texto = $_GET['entrada'];
print($texto);
$result = $conn->query("SELECT met_id, met_nome from metodologias where met_nome like '%$texto%'");
$res = array();
for ($i=0; $i < $result->rowCount(); $i++) { 
	array_push($res, $result->fetch(PDO::FETCH_ASSOC));
}
var_dump($res);
echo json_encode($res);
?>