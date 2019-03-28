<?php

if (isset($_POST['email'])) {
	
	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);
	$nome  = $_POST['nome'];


	$result = $conn->query("SELECT * from users where usu_email = '$email'");
	if($result->rowCount() > 0){
		echo 0;
	}else{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		$result = $conn->query("INSERT INTO users(usu_nome,usu_email,usu_senha) values('$nome','$email','$senha');");
		if ($result) {
			$id = $conn->query("SELECT usu_id from users where usu_email='$email'")->fetch(PDO::FETCH_ASSOC)['usu_id'];
			$_SESSION['user'] = $id;
			$_SESSION['userNome'] = $nome;
			//echo getcwd();
			chdir("imgs/perfil");
			var_dump(scandir(getcwd()));
			if (!copy("0.jpg", $id.".jpg")) {
			    echo -2;
			}else{
				echo 1;
			}
			chdir("../..");
			//inicio();
		}else{
			echo -1;
		}
	}
}

?>