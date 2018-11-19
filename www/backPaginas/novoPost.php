<?php

needLogin();

if (isset($_POST["novoPost"])) {
	

	$titulo      = $_POST['titulo'];
	$resumo      = $_POST['resumo'];
	$descricao   = $_POST['descricao'];
	$data        = date("Y-m-d");
	$autor       = $user;
	$metodologia = $_POST['metodologia'];
	$area        = $_POST['area'];

	$result = $conn->query("INSERT INTO posts(pos_titulo,pos_resumo,pos_descricao,pos_data,pos_autor,pos_metodologia,pos_area) 
										values('$titulo','$resumo' ,'$descricao' ,'$data' ,$autor   ,$metodologia   ,$area);");
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}
}

?>