<?php

if (isset($_POST["novoPost"])) {
	

	$titulo      = $_POST['titulo'];
	$resumo      = $_POST['resumo'];
	$descricao   = $_POST['descricao'];
	$data        = date("Y-m-d");
	$autor       = $user;
	$metodologia = $_POST['metodologia'];

	$result = $conn->query("INSERT INTO posts(pos_titulo,pos_resumo,pos_descricao,pos_data,pos_autor,pos_metodologia) 
										values('$titulo','$resumo' ,'$descricao' ,'$data' ,$autor   ,$metodologia);");
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}


}

?>