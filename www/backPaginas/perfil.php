<?php

$perfUser = $_GET['user'];
$result = $conn->query("SELECT usu_nome, usu_descricao, usu_instituicao, usu_lattes from users where usu_id='$perfUser'");
$dados = $result->fetch(PDO::FETCH_ASSOC);

//var_dump($dados);

?>