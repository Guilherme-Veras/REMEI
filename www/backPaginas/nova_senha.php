<?php

if (isset($_GET['i'])) {
	$id = $_GET['i'];
}else{
	inicio();
}

if (isset($_POST['senha'])) {
	$result = $conn->query("UPDATE users set usu_senha='".sha1($_POST['senha'])."' where usu_senha = '$id'");
	redir('login');
}



?>