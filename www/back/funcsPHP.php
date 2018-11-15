<?php

function inc_pag($page){
	include("paginas/".$page.".php");
}

function inicio(){
	echo "<script>redir('inicio');</script>";
}

function ir_a($page){
	echo "<script>redir('".$page."');</script>";
}

?>