<?php

$texto = $_POST['entrada'];

$result = $conn->query("SELECT are_id, are_nome from areas where are_nome like '%$texto%'");
$res = array();
for ($i=0; $i < $result->rowCount(); $i++) { 
	array_push($res, array_map("utf8_encode", $result->fetch(PDO::FETCH_ASSOC)));
}
echo json_encode($res);
?>