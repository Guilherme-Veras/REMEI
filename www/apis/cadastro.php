<?php
//$msg = 1 email ja existe
//

$email       = $_POST['email'];
$senha       = sha1($_POST['senha']);
$nome        = $_POST['nome'];


$result = $conn->query("SELECT * from users where usu_email = '$email'");
if($result->rowCount() > 0){
	echo 0;
}else{
	$result = $conn->query("INSERT INTO users(usu_nome,usu_email,usu_senha) values('$nome','$email','$senha');");
	if ($result) {
		echo 1;
		$_SESSION['user'] = $conn->insert_id;
		$_SESSION['userNome'] = $nome;
	}else{
		echo -1;
	}
}

?>