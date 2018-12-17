<?php

var_dump($_FILES);

$id = $_POST['id'];

if (file_exists("imgs/perfil/$id.jpg")) {
	unlink("imgs/perfil/$id.jpg");
}

$target_file = getcwd()."/imgs/perfil/".$id.".jpg";

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	echo 1;
}


?>