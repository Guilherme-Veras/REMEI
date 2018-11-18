<?php

$nome = $_POST['nome'];
$desc = $_POST['desc'];


$result = $conn->query("INSERT INTO metodologias(met_nome,met_descricao) values('$nome','$desc');");
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>