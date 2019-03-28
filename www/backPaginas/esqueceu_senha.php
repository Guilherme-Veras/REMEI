<?php

if (isset($_POST['email'])) {



	$result = $conn->query("SELECT * from users where usu_email = '$email'");
	if($result->rowCount() > 0){
		$dado = $result->fetch(PDO::FETCH_ASSOC)['usu_senha'];

		$email = $_POST['email'];
		$text = "Abre esse link para gerar uma nova senha: www.remei.sh.utfpr.edu.br/nova_senha?i=".$dado;

		if ($mailSent = smtpmailer($email, $mailRemei, 'REMEI', 'Esqueci minha senha', $text)) {
			echo "<script>alert('Abre seu email para gerar uma nova senha')</script>";

			//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.
			//print("deu bom");
		}else{
			echo "<script>alert('Erro ao enviar a menssagem, tente novamente mais tarde')</script>";
			//print($mailSent);
		}
	}else{
		echo "<script>alert('Email incorreto, tente novamente')</script>";
	}


}



?>