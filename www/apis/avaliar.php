<?php

$user = $_POST['user'];
$valo = $_POST['valo'];
$post = $_POST['post'];

$result = $conn->query("SELECT * from posts_ranking where posran_id_usu='$user' and posran_id_pos='$post'");
if($result->rowCount() > 0){
	$result = $conn->query("UPDATE posts_ranking set posran_ranking=$valo where posran_id_usu='$user' and posran_id_pos='$post';");
	//echo ("UPDATE posts_ranking set posran_ranking=$valo where posran_id_usu='$user' and posran_id_pos='$post';");
	if ($result) {
		echo 1;
	}else{
		echo -1;
	}
}else{
	$result = $conn->query("INSERT INTO posts_ranking(posran_id_pos,posran_id_usu,posran_ranking) values('$post','$user','$valo');");
	//echo ("INSERT INTO posts_ranking(posran_id_pos,posran_id_usu,posran_ranking) values('$post','$user','$valo');");
	if ($result) {
		echo 1;
	}else{
		echo -1;
	}
}

?>