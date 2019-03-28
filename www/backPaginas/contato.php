<?php

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$text = $_POST['text'];

	if ($mailSent = smtpmailer($email, $mailRemei, 'REMEI', 'Contato', $text)) {

		//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.
		print("deu bom");
	}else{
		print($mailSent);
	}
}




?>