<?php

$id          = $_POST['id'];
$nome        = $_POST['nome'];
$descricao   = $_POST['descricao'];
$instituicao = $_POST['instituicao'];
$lattes      = $_POST['lattes'];



$result = $conn->query("UPDATE users SET usu_nome='$nome', usu_descricao='$descricao', usu_instituicao='$instituicao', usu_lattes='$lattes' where usu_id=$id");
if ($result) {
	echo 1;
}else{
	echo -1;
}

?>