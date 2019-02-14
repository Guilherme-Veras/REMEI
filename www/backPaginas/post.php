<?php

if (!isset($_GET['post'])) {
	inicio();
}

$post = $_GET['post'];
$result = $conn->query("
SELECT pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where pos_id=$post;");
$dados = $result->fetch(PDO::FETCH_ASSOC);

$conn->query("UPDATE posts SET pos_visualizacoes=pos_visualizacoes+1 where pos_id=$post");



$result = $conn->query("SELECT posran_ranking from posts_ranking where posran_id_usu='$user' and posran_id_pos='$post'");
if($result->rowCount() > 0){
	$rankAtual = $result->fetch(PDO::FETCH_ASSOC)['posran_ranking'];
}else{
	$rankAtual = 0;
}


$fotos = array();
$videos = array();

chdir("imgs/post/");
if (file_exists($post)) {
	chdir($post);
	$arqs = scandir(getcwd());

	for ($i=2; $i<sizeof($arqs); $i++) { 
		$temp = new SplFileInfo($arqs[$i]);
		if ($temp->getExtension() == "mp4") {
			array_push($videos, $arqs[$i]);
		}else{
			array_push($fotos, $arqs[$i]);
		}
	}
	chdir("../../..");
}
?>