<?php 

if (!isset($_GET['busca'])) {
	inicio();
}

if (!isset($_GET['filtro'])) {
	$filtro = 0;
}else{
	$filtro = $_GET['filtro'];
}
$busca  = $_GET['busca'];

switch ($filtro) {
	case 0:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
pos_titulo like '%$busca%' or
usu_nome   like '%$busca%' or
met_nome   like '%$busca%' or
are_nome   like '%$busca%'
;";
		break;
	case 1:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
are_nome   like '%$busca%'
;";
		break;
	case 2:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
usu_nome   like '%$busca%'
;";
		break;
	case 3:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
met_nome   like '%$busca%'
;";
		break;
	case 4:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
pos_titulo like '%$busca%'
;";
		break;
	default:
		$sql = "
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
where 
pos_titulo like '%$busca%' or
usu_nome   like '%$busca%' or
met_nome   like '%$busca%' or
are_nome   like '%$busca%'
;";
}

$result = $conn->query($sql);
$posts = array();
for ($i=0; $i < $result->rowCount(); $i++) { 
	array_push($posts, $result->fetch(PDO::FETCH_ASSOC));
}

//var_dump($posts);

?>