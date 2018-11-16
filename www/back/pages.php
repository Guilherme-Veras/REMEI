<?php
//$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$REQUEST_URI_PASTA = substr(explode($REQUEST_URI, '?')[0], 1);

$URL = explode('/', $REQUEST_URI_PASTA);

if(empty($URL[0])){
	$paginaAtual = "Pagina Inicial";
	$paginaVar = "inicio.php";
	$paginaAtualBasico = "inicio";
}else{
	if(file_exists('paginas/' . $URL[0] . '.php')){
		$paginaAtual = ucwords(str_replace("_", " ", $URL[0]));
	  	$paginaVar = $URL[0].".php";
		$paginaAtualBasico = $URL[0];
	}else{
		$paginaAtual = "Pagina Inicial";
		$paginaVar = "inicio.php";
		$paginaAtualBasico = "inicio";
	}
}


?>