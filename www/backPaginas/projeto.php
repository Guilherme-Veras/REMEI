<?php

$result = $conn->query("
SELECT pos_id as id,pos_titulo as titulo,pos_resumo as resumo,pos_descricao as descricao,pos_data as data,usu_nome as autor,pos_autor as autorId,met_nome as metodologia,are_nome as area,(select AVG(posran_ranking) as rank from posts_ranking where posran_id_pos=pos_id) as ranking
from posts 
join users on pos_autor=usu_id 
join areas on pos_area=are_id 
join metodologias on pos_metodologia=met_id 
order by pos_visualizacoes DESC limit 5");
$posts = array();
for ($i=0; $i < $result->rowCount(); $i++) { 
	array_push($posts, $result->fetch(PDO::FETCH_ASSOC));
}



?>