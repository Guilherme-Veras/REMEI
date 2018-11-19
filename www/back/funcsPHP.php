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

function needLogin(){
	if (isset($_SESSION['user']) && $_SESSION['user']==0) {
		//inicio();
	}
}

function estrelas($rank, $user, $post){
	$rank*=20;
	$icons = [ 1 => "star-white.svg", 2 => "star-gray.svg", 3 => "star-black.svg"];
	$ranks = [1,1,1,1,1];
	if($rank == NULL){ $ranks = [1,1,1,1,1]; }
	if($rank >= 0){ $ranks[0] = 2; }
	if($rank >= 20){ $ranks[0] = 3; }
	if($rank >= 30){ $ranks[1] = 2; }
	if($rank >= 40){ $ranks[1] = 3; }
	if($rank >= 50){ $ranks[2] = 2; }
	if($rank >= 60){ $ranks[2] = 3; }
	if($rank >= 70){ $ranks[3] = 2; }
	if($rank >= 80){ $ranks[3] = 3; }
	if($rank >= 90){ $ranks[4] = 2; }
	if($rank >= 100){ $ranks[4] = 3; }
	if ($user!=0) {
		for($a = 0; $a < 5; $a++){
			echo "<img class='cursor' src='imgs/icons/".$icons[$ranks[$a]]."' onmouseover='estrelasHover(this, ".$a.")' onmouseleave='estrelasHoverOut(this, ".($rank).")' onclick='estrelasClick(".$user.", ".$a.", ".$post.")'>";
		}
	}else{
		for($a = 0; $a < 5; $a++){
			echo "<img src='imgs/icons/".$icons[$ranks[$a]]."'>";
		}
	}
	return 0;
}

?>