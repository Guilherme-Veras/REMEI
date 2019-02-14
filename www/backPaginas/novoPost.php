<?php

needLogin();

if (isset($_POST["titulo"])) {
	

	$titulo      = $_POST['titulo'];
	$resumo      = $_POST['resumo'];
	$descricao   = $_POST['descricao'];
	$data        = date("Y-m-d");
	$autor       = $user;
	$metodologia = $_POST['metodologia'];
	$area        = $_POST['area'];
	$rand        = $_POST['rand'];

	$result = $conn->query("INSERT INTO posts(pos_titulo,pos_resumo,pos_descricao,pos_data,pos_autor,pos_metodologia,pos_area) 
										values('$titulo','$resumo' ,'$descricao' ,'$data' ,$autor   ,$metodologia   ,$area);");
	

	if ($rand != "0") {
		chdir("imgs/post");
		rename($rand, $conn->lastInsertId());
		chdir("../..");
	}
	if ($result) {
		echo 1;
		ir_a("perfil?user=".$user);
	}else{
		echo 0;
		echo "<script>console.log('Erro')</script>";
	}
}
?>