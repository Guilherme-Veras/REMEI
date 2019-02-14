<?php

needLogin();

if (!isset($_GET['i'])) {
	inicio();
}

$post = $_GET['i'];
$result = $conn->query("
SELECT pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data, met_id,are_id, usu_id,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where pos_id=$post;");
$dados = $result->fetch(PDO::FETCH_ASSOC);

if ($user != $dados['usu_id']) {
	ir_a("perfil?user=".$user);
}


if (isset($_POST["titulo"])) {
	

	$titulo      = $_POST['titulo'];
	$resumo      = $_POST['resumo'];
	$descricao   = $_POST['descricao'];
	$metodologia = $_POST['metodologia'];
	$area        = $_POST['area'];
	//$rand        = $_POST['rand'];


	$result = $conn->query("UPDATE posts set pos_titulo='$titulo',pos_resumo='$resumo',pos_descricao='$descricao',pos_metodologia=$metodologia,pos_area=$area;");

	#$result = $conn->query("INSERT INTO posts(pos_titulo,pos_resumo,pos_descricao,pos_data,pos_autor,pos_metodologia,pos_area) 
										#values('$titulo','$resumo' ,'$descricao' ,'$data' ,$autor   ,$metodologia   ,$area);");
	

	/*if ($rand != "0") {
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
	}*/
}

?>