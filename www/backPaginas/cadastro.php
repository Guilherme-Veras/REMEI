<?php

if (isset($_POST['email'])) {
	
	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);
	$nome  = $_POST['nome'];


	$result = $conn->query("SELECT * from users where usu_email = '$email'");
	if($result->rowCount() > 0){
		echo 0;
	}else{
		$result = $conn->query("INSERT INTO users(usu_nome,usu_email,usu_senha) values('$nome','$email','$senha');");
		if ($result) {
			$id = $conn->query("SELECT usu_id from users where usu_email='$email'")->fetch(PDO::FETCH_ASSOC)['usu_id'];
			$_SESSION['user'] = $id;
			$_SESSION['userNome'] = $nome;
			echo getcwd();
			if (!copy("imgs/perfil/0.jpg", "imgs/perfil/".$id.".jpg")) {
			    echo -2;
			}else{
				echo 1;
			}
			//inicio();
		}else{
			echo -1;
		}
	}
}

?>