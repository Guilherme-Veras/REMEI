<?php

$rand = $_GET['t'];

chdir("../imgs/post");

if (!file_exists($rand)) {
	mkdir($rand);
}

$target_file = getcwd()."/".$rand."/".pathinfo($_FILES["file"]["name"])['filename'].".png";

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	echo "valid";
}

?>
