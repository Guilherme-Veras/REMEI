<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$user = $conn->query("SELECT usu_id, usu_nome, usu_senha from users where usu_email = '$email'");
if($user->rowCount() == 1){
	$ruser = $user->fetch(PDO::FETCH_ASSOC);
	if($ruser['usu_senha'] == sha1($_POST['senha'])){
		echo $ruser['usu_nome'];
		$_SESSION['user'] = $ruser['usu_id'];
		$_SESSION['userNome'] = $ruser['usu_nome'];
	}else{
		echo 1;
	}
}else{
	echo 0;
}

?>