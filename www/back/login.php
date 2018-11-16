<?php

if (isset($_GET['loggout'])) {
	unset($_SESSION['user']);
	unset($_SESSION['userNome']);
}

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$userNome = $_SESSION['userNome'];
}else{
	$user = 0;
	$userNome = "";
}


?>