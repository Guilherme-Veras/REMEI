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
	if (!isset($_SESSION['user']) || $_SESSION['user']==0) {
		inicio();
	}
}

function ajustaNome($nome){
	$nomes = explode(" ", $nome);
	return $nomes[sizeof($nomes)-1].", ".$nomes[0];
}

function estrelas($rank, $user, $post, $ranked=0){
	$rank*=20;
	$ranked*=20;
	$icons = [ 1 => "star-white.svg", 2 => "star-gray.svg", 3 => "star-black.svg", 4 => "star-yellow.svg"];
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
	if($ranked >= 20){ $ranks[0] = 4; }
	if($ranked >= 40){ $ranks[1] = 4; }
	if($ranked >= 60){ $ranks[2] = 4; }
	if($ranked >= 80){ $ranks[3] = 4; }
	if($ranked >= 100){ $ranks[4] = 4; }
	if ($user!=0) {
		for($a = 0; $a < 5; $a++){
			echo "<img class='cursor' src='imgs/icons/".$icons[$ranks[$a]]."' onmouseover='estrelasHover(this, ".$a.")' onmouseleave='estrelasHoverOut(this, ".($rank).")' onclick='estrelasClick(".$user.", ".$a.", ".$post.", this)'>";
		}
	}else{
		for($a = 0; $a < 5; $a++){
			echo "<img src='imgs/icons/".$icons[$ranks[$a]]."'>";
		}
	}
	return 0;
}

function estrelasR($rank, $user, $post){
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
	$res = ""; 
	if ($user!=0) {
		for($a = 0; $a < 5; $a++){
			$res .= "<img class='cursor' src='imgs/icons/".$icons[$ranks[$a]]."' onmouseover='estrelasHover(this, ".$a.")' onmouseleave='estrelasHoverOut(this, ".($rank).")' onclick='estrelasClick(".$user.", ".$a.", ".$post.", this)'>";
		}
	}else{
		for($a = 0; $a < 5; $a++){
			$res .= "<img src='imgs/icons/".$icons[$ranks[$a]]."'>";
		}
	}
	return $res;
}

function getPost($dados){
	echo '
		<div class="blog-card">
		 	<div class="meta">
		 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
		 		<ul class="details">
		 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="perfil?user='.$dados["autorId"].'"> '.ajustaNome($dados["autor"]).'</a></li>
		 			<li class="date"><img src="imgs/icons/calendar-white.svg"> '.date_format(date_create($dados["data"]),"d/m/Y").'</li>
		 			<li class="tags">
		 				<ul>
				            <li><img src="imgs/icons/tag-white.svg"> '.$dados["metodologia"].'</li>
				            <li>'.$dados["area"].'</li>
				        </ul>
				    </li>
				</ul>
		    </div>
		    <div class="description">
		      <h1>'.$dados["titulo"].'</h1>
		      <!--h2>Opening a door to the future</h2-->
			  <p>'.$dados["resumo"].'</p>
				<p class="card-rodape">
					<fieldset class="rating">
						'.estrelasR($dados["ranking"], 0, 0).'
					</fieldset>

					<p class="read-more">
						<a class="read-more-link" href="post?post='.$dados["id"].'">Ler mais </a>
					</p>
				</p>
		    </div> 
		</div>
		';
}


function getPostAdmin($dados){
	echo '
		<div class="blog-card">
		 	<div class="meta">
		 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
		 		<ul class="details">
		 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="perfil?user='.$dados["autorId"].'"> '.ajustaNome($dados["autor"]).'</a></li>
		 			<li class="date"><img src="imgs/icons/calendar-white.svg"> '.date_format(date_create($dados["data"]),"d/m/Y").'</li>
		 			<li class="tags">
		 				<ul>
				            <li><img src="imgs/icons/tag-white.svg"> '.$dados["metodologia"].'</li>
				            <li>'.$dados["area"].'</li>
				        </ul>
				    </li>
				</ul>
		    </div>
		    <div class="description">
		      <h1>'.$dados["titulo"].'</h1>
		      <!--h2>Opening a door to the future</h2-->
			  <p>'.$dados["resumo"].'</p>
				<p class="card-rodape">
					<fieldset class="rating">
						'.estrelasR($dados["ranking"], 0, 0).'
					</fieldset>

					<p class="read-more">
						<a class="read-more-link" href="post?post='.$dados["id"].'">Ler mais </a>
						<a class="read-more-link" onclick="delPost('.$dados["id"].')">Deletar </a>
						<a class="read-more-link" href="editPost?i='.$dados["id"].'">Editar </a>
					</p>
				</p>
		    </div> 
		</div>
		';
}

?>