<?php

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$text = $email.": ".$_POST['text'];

	if ($mailSent = smtpmailer($mailRemei, $mailRemei, 'REMEI', 'Contato', $text)) {
		echo "<script>alert('Menssagem enviada com sucesso')</script>";

		//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.
		//print("deu bom");
	}else{
		echo "<script>alert('Erro ao enviar a menssagem, tente novamente mais tarde')</script>";
		//print($mailSent);
	}
}




?>