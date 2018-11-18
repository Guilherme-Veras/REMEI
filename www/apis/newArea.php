<?php

$nome = $_POST['nome'];


$result = $conn->query("INSERT INTO areas(are_nome) values('$nome');");
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>